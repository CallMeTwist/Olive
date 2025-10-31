<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct(
        protected CartService $cart
    ) {}

    /**
     * Display cart page
     */
    public function index()
    {
        $items = $this->cart->all();
        $subtotal = $this->cart->subtotal();
        $tax = $this->cart->tax();
        $shipping = $this->cart->shipping();
        $total = $this->cart->total();
        $savings = $this->cart->savings();
        $count = $this->cart->count();

        return view('cart.index', compact(
            'items',
            'subtotal',
            'tax',
            'shipping',
            'total',
            'savings',
            'count'
        ));
    }

    /**
     * Add product to cart
     */
    public function add(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
        ]);

        $quantity = (int) $request->input('quantity', 1);

        // Check stock
        if ($product->stock < $quantity) {
            return back()->with('error', 'Not enough stock available. Only ' . $product->stock . ' left.');
        }

        // Check if product is active
        if (!$product->is_active) {
            return back()->with('error', 'This product is currently unavailable.');
        }

        $this->cart->add($product, $quantity);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Added to cart',
                'cart_count' => $this->cart->count(),
            ]);
        }

        return back()->with('success', $product->title . ' added to cart!');
    }

    /**
     * Update cart item quantity
     */
    public function update(Request $request, string $cartKey)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0|max:100',
        ]);

        $quantity = (int) $request->input('quantity');
        $this->cart->update($cartKey, $quantity);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'subtotal' => $this->cart->subtotal(),
                'total' => $this->cart->total(),
                'cart_count' => $this->cart->count(),
            ]);
        }

        return back()->with('success', 'Cart updated!');
    }

    /**
     * Remove item from cart
     */
    public function remove(string $cartKey)
    {
        $this->cart->remove($cartKey);

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'cart_count' => $this->cart->count(),
            ]);
        }

        return back()->with('success', 'Item removed from cart!');
    }

    /**
     * Clear entire cart
     */
    public function clear()
    {
        $this->cart->clear();
        return back()->with('success', 'Cart cleared!');
    }
}
