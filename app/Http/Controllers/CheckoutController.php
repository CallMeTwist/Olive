<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $percentSaving = $this->cart->percentSaving();

        return view('checkout.index', compact(
            'items',
            'subtotal',
            'tax',
            'shipping',
            'total',
            'savings',
            'percentSaving'
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

        // Create the order record BEFORE redirecting
        $order = Order::create([
            'order_number' => Order::generateOrderNumber(),
            'status' => 'pending',
            'expired_at' => now()->addHours(24),
            'subtotal' => $this->cart->subtotal(),
            'tax' => $this->cart->tax(),
            'shipping' => $this->cart->shipping(),
            'total' => $this->cart->total(),
            'savings' => $this->cart->savings(),
        ]);

        // Create order items
        foreach ($this->cart->all() as $item) {
            $product = $item->product;

            // Skip if product doesn't exist
            if (!$product) {
                continue;
            }

            $orderItem = $order->items()->create([
                'product_id' => $item->product_id,
                'product_title' => $product->title,  // ✅ Get from product relationship
                'sku' => $product->sku,               // ✅ Get from product relationship
                'size' => $item->size,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'subtotal' => $item->price * $item->quantity,
            ]);

            // Reserve stock
            $product->decrement('stock', $item->quantity);
        }

        $whatsappNumber = config('services.whatsapp.number');
        if (!$whatsappNumber) {
            return back()->with('error', 'WhatsApp number not configured.');
        }

        $message = $this->generateWhatsAppMessage($order);

        // Store the message for reference
        $order->update(['whatsapp_message' => $message]);

        $encoded = rawurlencode($message);
        $url = "https://wa.me/{$whatsappNumber}?text={$encoded}";

        // Clear cart after creating order
        $this->cart->clear();

        return redirect()->away($url);
    }

    /**
     * Generate formatted WhatsApp message
     * @param Order $order
     * @return string
     */
    protected function generateWhatsAppMessage(Order $order): string
    {
        $lines = [];
        $lines[] = "🛍️ *NEW ORDER FROM " . strtoupper(config('[app.name](http://app.name/)')) . "*";
        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "";
        $lines[] = "🔖 *Order #: {$order->order_number}*";
        $lines[] = "";
        $lines[] = "📦 *ORDER DETAILS:*";

        foreach ($order->items as $item) {
            $lines[] = "• {$item->product_title}";
            if ($item->size) {
                $lines[] = "  Size: {$item->size}";
            }
            if ($item->sku) {
                $lines[] = "  SKU: {$item->sku}";
            }
            $lines[] = "  Qty: {$item->quantity} × ₦" . number_format($item->price, 2);
            $lines[] = "  Subtotal: ₦" . number_format($item->subtotal, 2);
            $lines[] = "";
        }

        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "💰 *PRICE BREAKDOWN:*";
        $lines[] = "Subtotal: ₦" . number_format($order->subtotal, 2);

        if ($order->savings > 0) {
            $lines[] = "Savings: -₦" . number_format($order->savings, 2) . " 🎉";
        }

        $lines[] = "Tax (7.5%): ₦" . number_format($order->tax, 2);
        $lines[] = "Shipping: " . ($order->shipping > 0 ? "₦" . number_format($order->shipping, 2) : "FREE 🎁");
        $lines[] = "";
        $lines[] = "🏆 *TOTAL: ₦" . number_format($order->total, 2) . "*";
        $lines[] = "━━━━━━━━━━━━━━━━━━━━";
        $lines[] = "";
        $lines[] = "📝 *PLEASE PROVIDE:*";
        $lines[] = "👤 Full Name:";
        $lines[] = "📞 Phone Number:";
        $lines[] = "📍 Delivery Address:";
        $lines[] = "🏙️ City/State:";
        $lines[] = "";
        $lines[] = "💳 *PAYMENT INSTRUCTIONS:*";
        $lines[] = "Bank: [Your Bank Name]";
        $lines[] = "Account: [Your Account Number]";
        $lines[] = "Name: [Your Business Name]";
        $lines[] = "";
        $lines[] = "⚠️ *IMPORTANT:* Please quote Order #{$order->order_number} when making payment and send your payment receipt here.";
        $lines[] = "";
        $lines[] = "⏰ Order Date: " . now()->format('d M Y, h:i A');
        $lines[] = "";
        $lines[] = "Thank you for shopping with us! 🙏";

        return implode("\\n", $lines);

        }
}
