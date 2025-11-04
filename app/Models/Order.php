<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'status',
        'customer_name',
        'customer_phone',
        'delivery_address',
        'city_state',
        'subtotal',
        'tax',
        'shipping',
        'total',
        'savings',
        'payment_method',
        'payment_confirmed_at',
        'payment_notes',
        'whatsapp_message',
    ];
    protected $casts = [
        'expired_at' => 'datetime',
        'payment_confirmed_at' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'shipping' => 'decimal:2',
        'total' => 'decimal:2',
        'savings' => 'decimal:2',
    ];

    // Method to check if order is expired
    public function isExpired(): bool
    {
        return $this->expires_at && $this->expires_at->isPast() && $this->status === 'pending';
    }

    // Scope to get expired orders
    public function scopeExpired($query)
    {
        return $query->where('status', 'pending')
            ->where('expires_at', '<', now());
    }


    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    // Helper method to generate unique order numbers
    public static function generateOrderNumber(): string
    {
        do {
            $number = 'ORD-' . date('Ymd') . '-' . str_pad(random_int(1, 9999), 4, '0', STR_PAD_LEFT);
        } while (self::where('order_number', $number)->exists());

        return $number;
    }

}
