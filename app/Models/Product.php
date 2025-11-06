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

            //Generate unique slug
            if (empty($product->slug)) {
                $baseSlug = Str::slug($product->title);
                $slug = $baseSlug;
                $count = 1;

                while (self::where('slug', $slug)->exists()) {
                    $slug = "{$baseSlug}-{$count}";
                    $count++;
                }

                $product->slug = $slug;
            }
        });

        // When updating an existing product
        static::updating(function ($product) {
            // Only regenerate slug if title changed
            if ($product->isDirty('title')) {
                $baseSlug = Str::slug($product->title);
                $slug = $baseSlug;
                $count = 1;

                while (self::where('slug', $slug)
                    ->where('id', '!=', $product->id)
                    ->exists()) {
                    $slug = "{$baseSlug}-{$count}";
                    $count++;
                }

                $product->slug = $slug;
            }
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
