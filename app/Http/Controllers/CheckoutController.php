<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\RedirectResponse;

class CheckoutController extends Controller
{
    public function __construct(
        protected CartService $cart
    ) {}

    /**
     * Show checkout page
     */
    public function index()
    {
        if ($this->cart->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Validate cart before checkout
        $errors = $this->cart->validate();
        if (!empty($errors)) {
            return redirect()->route('cart.index')->withErrors($errors);
        }

        $items = $this->cart->all();
        $subtotal = $this->cart->subtotal();
        $tax = $this->cart->tax();
        $shipping = $this->cart->shipping();
        $total = $this->cart->total();
        $savings = $this->cart->savings();

        return view('checkout.index', compact(
            'items',
            'subtotal',
            'tax',
            'shipping',
            'total',
            'savings'
        ));
    }

    /**
     * Redirect to WhatsApp with order details
     */
    public function whatsapp(): RedirectResponse
    {
        if ($this->cart->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Validate cart
        $errors = $this->cart->validate();
        if (!empty($errors)) {
            return redirect()->route('cart.index')->withErrors($errors);
        }

        $whatsappNumber = config('services.whatsapp.number');

        if (!$whatsappNumber) {
            return back()->with('error', 'WhatsApp number not configured.');
        }

        $message = $this->generateWhatsAppMessage();
        $encoded = rawurlencode($message);
        $url = "https://wa.me/{$whatsappNumber}?text={$encoded}";

        // Optional: Clear cart after checkout
         $this->cart->clear(); //may remove later sha

        return redirect()->away($url);
    }

    /**
     * Generate formatted WhatsApp message
     */
    protected function generateWhatsAppMessage(): string
    {
        $items = $this->cart->all();
        $subtotal = $this->cart->subtotal();
        $tax = $this->cart->tax();
        $shipping = $this->cart->shipping();
        $total = $this->cart->total();
        $savings = $this->cart->savings();

        $lines = [];
        $lines[] = "🛍️ *NEW ORDER FROM " . strtoupper(config('app.name')) . "*";
        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "";
        $lines[] = "📦 *ORDER DETAILS:*";

        foreach ($items as $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $lines[] = "• {$item['title']}";
            if ($item['size']) {
                $lines[] = "  Size: {$item['size']}";
            }
            if ($item['sku']) {
                $lines[] = "  SKU: {$item['sku']}";
            }
            $lines[] = "  Qty: {$item['quantity']} × ₦" . number_format($item['price'], 2);
            $lines[] = "  Subtotal: ₦" . number_format($itemTotal, 2);
            $lines[] = "";
        }

        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "💰 *PRICE BREAKDOWN:*";
        $lines[] = "Subtotal: ₦" . number_format($subtotal, 2);

        if ($savings > 0) {
            $lines[] = "Savings: -₦" . number_format($savings, 2) . " 🎉";
        }

        $lines[] = "Tax (7.5%): ₦" . number_format($tax, 2);
        $lines[] = "Shipping: " . ($shipping > 0 ? "₦" . number_format($shipping, 2) : "FREE 🎁");
        $lines[] = "";
        $lines[] = "🏆 *TOTAL: ₦" . number_format($total, 2) . "*";
        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "";
        $lines[] = "📝 *PLEASE PROVIDE:*";
        $lines[] = "👤 Full Name: ________________";
        $lines[] = "📞 Phone Number: ________________";
        $lines[] = "📍 Delivery Address: ________________";
        $lines[] = "🏙️ City/State: ________________";
        $lines[] = "💳 Payment Method: (Bank Transfer/Cash on Delivery)";
        $lines[] = "";
        $lines[] = "⏰ Order Date: " . now()->format('d M Y, h:i A');
        $lines[] = "";
        $lines[] = "Thank you for shopping with us! 🙏";

        return implode("\n", $lines);
    }
}
