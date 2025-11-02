<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartService
{
    /**
     * Get or create cart for current user/session
     */
    protected function getCart(): Cart
    {
        if (Auth::check()) {
            // Logged-in user
            return Cart::firstOrCreate(['user_id' => Auth::id()]);
        }

        // Guest user - use session ID
        $sessionId = Session::getId();
        return Cart::firstOrCreate(['session_id' => $sessionId]);
    }

    /**
     * Add product to cart
     */
    public function add(Product $product, int $quantity = 1, ?string $size = null, array $options = []): CartItem
    {
        $cart = $this->getCart();

        // Check if item already exists
        $cartItem = $cart->items()
            ->where('product_id', $product->id)
            ->where('size', $size)
            ->first();

        if ($cartItem) {
            // Update quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Create new cart item
            $cartItem = $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'size' => $size,
                'price' => $product->price, // Store current price
                'options' => $options,
            ]);
        }

        return $cartItem;
    }

    /**
     * Update cart item quantity
     */
    public function update(int $cartItemId, int $quantity): bool
    {
        $cart = $this->getCart();
        $cartItem = $cart->items()->find($cartItemId);

        if (!$cartItem) {
            return false;
        }

        if ($quantity <= 0) {
            $cartItem->delete();
        } else {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }

        return true;
    }

    /**
     * Remove item from cart
     */
    public function remove(int $cartItemId): bool
    {
        $cart = $this->getCart();
        $cartItem = $cart->items()->find($cartItemId);

        if ($cartItem) {
            $cartItem->delete();
            return true;
        }

        return false;
    }

    /**
     * Get all cart items
     */
    public function all()
    {
        return $this->getCart()->items()->with('product.primaryImage')->get();
    }

    /**
     * Get cart count
     */
    public function count(): int
    {
        return $this->getCart()->items_count;
    }

    /**
     * Calculate subtotal
     */
    public function subtotal(): float
    {
        return $this->getCart()->subtotal;
    }

    /**
     * Calculate savings
     */
    public function savings(): float
    {
        return $this->getCart()->savings;
    }

    /**
     * Calculate tax
     */
    public function tax(): float
    {
        return $this->getCart()->tax;
    }

    /**
     * Calculate shipping
     */
    public function shipping(): float
    {
        return $this->getCart()->shipping;
    }

    /**
     * Calculate total
     */
    public function total(): float
    {
        return $this->getCart()->total;
    }

    /**
     * Clear cart
     */
    public function clear(): void
    {
        $this->getCart()->items()->delete();
    }

    /**
     * Check if cart is empty
     */
    public function isEmpty(): bool
    {
        return $this->getCart()->items()->count() === 0;
    }

    /**
     * Merge guest cart to user cart on login
     */
    public function mergeOnLogin(string $guestSessionId, int $userId): void
    {
        $guestCart = Cart::where('session_id', $guestSessionId)->first();

        if (!$guestCart || $guestCart->items->isEmpty()) {
            return;
        }

        $userCart = Cart::firstOrCreate(['user_id' => $userId]);

        foreach ($guestCart->items as $guestItem) {
            $existingItem = $userCart->items()
                ->where('product_id', $guestItem->product_id)
                ->where('size', $guestItem->size)
                ->first();

            if ($existingItem) {
                $existingItem->quantity += $guestItem->quantity;
                $existingItem->save();
            } else {
                $userCart->items()->create([
                    'product_id' => $guestItem->product_id,
                    'quantity' => $guestItem->quantity,
                    'size' => $guestItem->size,
                    'price' => $guestItem->price,
                    'options' => $guestItem->options,
                ]);
            }
        }

        // Delete guest cart
        $guestCart->delete();
    }

    /**
     * Validate cart items
     */
    public function validate(): array
    {
        $errors = [];
        $cart = $this->getCart();

        foreach ($cart->items as $item) {
            $product = $item->product;

            if (!$product) {
                $errors[] = "Product no longer available";
                $item->delete();
                continue;
            }

            if (!$product->is_active) {
                $errors[] = "{$product->title} is currently unavailable";
                $item->delete();
                continue;
            }

            if ($product->stock < $item->quantity) {
                $errors[] = "{$product->title} - only {$product->stock} in stock";
                $item->quantity = $product->stock;
                $item->save();
            }

            if ($product->price != $item->price) {
                $errors[] = "Price for {$product->title} has changed";
                $item->price = $product->price;
                $item->save();
            }
        }

        return $errors;
    }
}
