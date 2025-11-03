<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
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
        $percentSaving = $this->cart->percentSaving();
        $count = $this->cart->count();

        return view('cart.index', compact(
            'items',
            'subtotal',
            'tax',
            'shipping',
            'total',
            'savings',
            'count',
            'percentSaving',
        ));
    }

    /**
     * Add product to cart
     */
    public function add(Request $request, Product $product)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
            'size' => 'required|string|max:50',
        ]);

        $quantity = (int) $validated['quantity'];
        $size = $validated['size'];

        // Check stock
        if ($product->stock < $quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Not enough stock available. Only ' . $product->stock . ' left.'
            ], 400);
        }

        // Check if product is active
        if (!$product->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'This product is currently unavailable.'
            ], 400);
        }

        // Add to cart
        $this->cart->add($product, $quantity, $size);

        return response()->json([
            'success' => true,
            'message' => 'Added to cart successfully!',
            'cart_count' => $this->cart->count(),
            'subtotal' => $this->cart->subtotal(),
            'total' => $this->cart->total(),
        ]);
    }

    /**
     * Update cart item quantity
     * FIXED: Added cartItem retrieval and item_subtotal calculation
     */
    public function update(Request $request, int $cartItemId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0|max:100',
        ]);

        $quantity = (int) $request->input('quantity');
        $this->cart->update($cartItemId, $quantity);

        // FIXED: Retrieve the cart item to get its subtotal
        $cartItem = CartItem::find($cartItemId);
        $itemSubtotal = $cartItem ? ($cartItem->price * $cartItem->quantity) : 0;

        return response()->json([
            'success' => true,
            'cart_count' => $this->cart->count(),
            'subtotal' => $this->cart->subtotal(),
            'total' => $this->cart->total(),
            'item_subtotal' => $itemSubtotal,
        ]);

    }

    /**
     * Remove item from cart
     */
    public function remove(int $cartItemId)
    {
        $this->cart->remove($cartItemId);

        return response()->json([
            'success' => true,
            'cart_count' => $this->cart->count(),
            'subtotal' => $this->cart->subtotal(),
            'total' => $this->cart->total(),
        ]);
    }

    /**
     * Clear entire cart
     */
    public function clear()
    {
        $this->cart->clear();

        return response()->json([
            'success' => true,
            'message' => 'Cart cleared!',
            'cart_count' => 0,
            'subtotal' => 0,
            'total' => 0,
        ]);
    }
}
