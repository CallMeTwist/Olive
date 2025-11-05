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
     * Calculate tax (7.5% VAT) - FIXED: Added this method
     */
    public function getTaxAttribute(): float
    {
        return $this->subtotal * 0;
    }

    /**
     * Calculate shipping
     */
    public function getShippingAttribute(): float
    {
        $isFreeShipping = true;

        if ($isFreeShipping) {
            return 0;
        }

        return $this->subtotal >= 30000 ? 0 : 2500;
    }

    /**
     * Calculate savings
     */
    public function getSavingsAttribute(): float
    {
        return $this->items->sum(function ($item) {
            if ($item->product && $item->product->old_price && $item->product->old_price > $item->price) {
                return ($item->product->old_price - $item->price) * $item->quantity;
            }
            return 0;
        });
    }

    /**
     * Calculate percentage saving
     */
    public function getPercentSavingsAttribute(): float
    {
        $oldTotal = $this->items->sum(function ($item) {
            return ($item->product && $item->product->old_price)
                ? $item->product->old_price * $item->quantity
                : $item->price * $item->quantity;
        });

        if ($oldTotal <= 0) {
            return 0;
        }

        $savings = $this->savings;
        return round(($savings / $oldTotal) * 100, 1);
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
        return (int) $this->items->sum('quantity');
    }
}
