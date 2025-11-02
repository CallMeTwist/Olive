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
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
            'size' => 'required|string|max:50', // Make size required
        ]);

        $quantity = (int) $validated['quantity'];
        $size = $validated['size'];

        // Check stock
        if ($product->stock < $quantity) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Not enough stock available. Only ' . $product->stock . ' left.'
                ], 400);
            }
            return back()->with('error', 'Not enough stock available. Only ' . $product->stock . ' left.');
        }

        // Check if product is active
        if (!$product->is_active) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'This product is currently unavailable.'
                ], 400);
            }
            return back()->with('error', 'This product is currently unavailable.');
        }

        // Add to cart
        $this->cart->add($product, $quantity, $size);

        // AJAX response
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Added to cart successfully!',
                'cart_count' => $this->cart->count(),
                'cart_total' => number_format($this->cart->total(), 2),
            ]);
        }

        return redirect()->route('cart.index')->with('success', $product->title . ' added to cart!');
    }

    /**
     * Update cart item quantity
     */
    public function update(Request $request, int $cartItemId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0|max:100',
        ]);

        $quantity = (int) $request->input('quantity');
        $this->cart->update($cartItemId, $quantity);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'subtotal' => number_format($this->cart->subtotal(), 2),
                'total' => number_format($this->cart->total(), 2),
                'cart_count' => $this->cart->count(),
            ]);
        }

        return back()->with('success', 'Cart updated!');
    }

    /**
     * Remove item from cart
     */
    public function remove(int $cartItemId)
    {
        $this->cart->remove($cartItemId);

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'cart_count' => $this->cart->count(),
                'cart_total' => number_format($this->cart->total(), 2),
            ]);
        }

        return back()->with('success', 'Item removed from cart!');
    }

    /**
     * Clear entire cart
     */
    public function clear(Request $request)
    {
        $this->cart->clear();

        // Always redirect for non-AJAX requests
        if (!$request->ajax() && !$request->wantsJson()) {
            return redirect()->route('cart.index')->with('success', 'Cart cleared!');
        }


        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cart cleared!'
            ]);
        }

        return back()->with('success', 'Cart cleared!');
    }
}
