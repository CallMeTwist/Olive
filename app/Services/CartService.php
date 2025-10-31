<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

class CartService
{
    protected string $sessionKey = 'cart.items';

    /**
     * Add product to cart
     */
    public function add(Product $product, int $quantity = 1, array $options = []): void
    {
        $cart = session()->get($this->sessionKey, []);

        // Create unique key (product + variant if needed)
        $cartKey = $this->generateCartKey($product->id, $options);

        if (isset($cart[$cartKey])) {
            // Update quantity if item exists
            $cart[$cartKey]['quantity'] += $quantity;
        } else {
            // Add new item
            $cart[$cartKey] = [
                'id' => $product->id,
                'title' => $product->title,
                'sku' => $product->sku,
                'price' => (float) $product->price,
                'old_price' => $product->old_price ? (float) $product->old_price : null,
                'quantity' => $quantity,
                'image' => $product->primaryImage ? $product->primaryImage->path : null,
                'size' => $product->size,
                'options' => $options, // Additional options (color, custom text, etc.)
            ];
        }

        session()->put($this->sessionKey, $cart);
    }

    /**
     * Update item quantity
     */
    public function update(string $cartKey, int $quantity): void
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$cartKey])) {
            if ($quantity <= 0) {
                unset($cart[$cartKey]);
            } else {
                $cart[$cartKey]['quantity'] = $quantity;
            }
            session()->put($this->sessionKey, $cart);
        }
    }

    /**
     * Remove item from cart
     */
    public function remove(string $cartKey): void
    {
        $cart = session()->get($this->sessionKey, []);
        unset($cart[$cartKey]);
        session()->put($this->sessionKey, $cart);
    }

    /**
     * Get all cart items
     */
    public function all(): array
    {
        return session()->get($this->sessionKey, []);
    }

    /**
     * Get cart items as collection
     */
    public function items(): Collection
    {
        return collect($this->all());
    }

    /**
     * Get cart count
     */
    public function count(): int
    {
        return array_sum(array_column($this->all(), 'quantity'));
    }

    /**
     * Calculate subtotal
     */
    public function subtotal(): float
    {
        $cart = $this->all();
        return array_reduce($cart, fn($sum, $item) =>
            $sum + ($item['price'] * $item['quantity']), 0.0
        );
    }

    /**
     * Calculate total savings
     */
    public function savings(): float
    {
        $cart = $this->all();
        return array_reduce($cart, function($sum, $item) {
            if ($item['old_price']) {
                return $sum + (($item['old_price'] - $item['price']) * $item['quantity']);
            }
            return $sum;
        }, 0.0);
    }

    /**
     * Calculate tax (7.5% VAT for Nigeria)
     */
    public function tax(float $rate = 0.075): float
    {
        return $this->subtotal() * $rate;
    }

    /**
     * Calculate shipping
     */
    public function shipping(): float
    {
        // Free shipping over ₦30,000
        $subtotal = $this->subtotal();
        return $subtotal >= 30000 ? 0 : 2500;
    }

    /**
     * Calculate final total
     */
    public function total(): float
    {
        return $this->subtotal() + $this->tax() + $this->shipping();
    }

    /**
     * Clear cart
     */
    public function clear(): void
    {
        session()->forget($this->sessionKey);
    }

    /**
     * Check if cart is empty
     */
    public function isEmpty(): bool
    {
        return empty($this->all());
    }

    /**
     * Generate unique cart key
     */
    protected function generateCartKey(int $productId, array $options = []): string
    {
        if (empty($options)) {
            return (string) $productId;
        }

        ksort($options);
        return $productId . '_' . md5(json_encode($options));
    }

    /**
     * Validate cart items (check stock, prices, etc.)
     */
    public function validate(): array
    {
        $cart = $this->all();
        $errors = [];

        foreach ($cart as $key => $item) {
            $product = Product::find($item['id']);

            if (!$product) {
                $errors[] = "{$item['title']} is no longer available";
                $this->remove($key);
                continue;
            }

            if (!$product->is_active) {
                $errors[] = "{$item['title']} is currently unavailable";
                $this->remove($key);
                continue;
            }

            if ($product->stock < $item['quantity']) {
                $errors[] = "{$item['title']} - only {$product->stock} in stock";
                $this->update($key, $product->stock);
            }

            if ($product->price != $item['price']) {
                $errors[] = "Price for {$item['title']} has changed";
                // Update price in cart
                $cart[$key]['price'] = $product->price;
                session()->put($this->sessionKey, $cart);
            }
        }

        return $errors;
    }
}
