<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [];

    protected $casts = [
        'available_sizes' => 'array',
        'is_active' => 'boolean',
        'sale_ends_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            do {
                $sku = 'PRT-' . strtoupper(Str::random(8));
            } while (self::where('sku', $sku)->exists());

            $product->sku = $sku;
        });
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function averageRating(): float
    {
        return (float) $this->ratings()->avg('rating') ?? 0;
    }
}
