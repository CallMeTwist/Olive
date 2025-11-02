<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
    ];

    /**
     * Get the user that owns the cart
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get cart items
     */
    public function items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Calculate subtotal
     */
    public function getSubtotalAttribute(): float
    {
        return $this->items->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }

    /**
     * Calculate tax (7.5% VAT)
     */
    public function getTaxAttribute(): float
    {
        return $this->subtotal * 0.075;
    }

    /**
     * Calculate shipping
     */
    public function getShippingAttribute(): float
    {
        return $this->subtotal >= 30000 ? 0 : 2500;
    }

    /**
     * Calculate total
     */
    public function getTotalAttribute(): float
    {
        return $this->subtotal + $this->tax + $this->shipping;
    }

    /**
     * Get total items count
     */
    public function getItemsCountAttribute(): int
    {
        return $this->items->sum('quantity');
    }

    /**
     * Calculate savings
     */
    public function getSavingsAttribute(): float
    {
        return $this->items->sum(function ($item) {
            if ($item->product && $item->product->old_price) {
                return ($item->product->old_price - $item->price) * $item->quantity;
            }
            return 0;
        });
    }
}
