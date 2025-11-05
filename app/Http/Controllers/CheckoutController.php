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

        // Header
        $lines[] = "🛍️ *NEW ORDER*";
        $lines[] = "Order #: *{$order->order_number}*";
        $lines[] = "";

        // Items
        $lines[] = "*ITEMS:*";
        foreach ($order->items as $item) {
            $itemLine = "• {$item->product_title}";
            if ($item->size) {
                $itemLine .= " ({$item->size})";
            }
            $itemLine .= " - {$item->quantity}x ₦" . number_format($item->price, 0);
            $lines[] = $itemLine;
        }
        $lines[] = "";

        // Pricing
        $lines[] = "*SUMMARY:*";
        $lines[] = "Subtotal: ₦" . number_format($order->subtotal, 0);

        if ($order->savings > 0) {
            $lines[] = "Discount: -₦" . number_format($order->savings, 0);
        }

        if ($order->tax > 0) {
            $lines[] = "Tax: ₦" . number_format($order->tax, 0);
        }

        $lines[] = "Shipping: " . ($order->shipping > 0 ? "₦" . number_format($order->shipping, 0) : "FREE");
        $lines[] = "";
        $lines[] = "*Total: ₦" . number_format($order->total, 0) . "*";
        $lines[] = "";

        // Customer instructions
        $lines[] = "Please reply with:";
        $lines[] = "• Your full name";
        $lines[] = "• Phone number";
        $lines[] = "• Delivery address";
        $lines[] = "";

        // Payment info - NOW WITH REAL DETAILS
        $lines[] = "*PAYMENT DETAILS:*";
        $lines[] = "Bank: " . config('services.payment.bank_name');
        $lines[] = "Account: " . config('services.payment.account_number');
        $lines[] = "Name: " . config('services.payment.account_name');
        $lines[] = "";
        $lines[] = "Quote Order #*{$order->order_number}* when paying.";
        $lines[] = "Send payment receipt after transfer.";

        return implode("\n", $lines);
    }
}
