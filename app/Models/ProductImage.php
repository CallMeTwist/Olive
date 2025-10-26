<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        static::saving(function ($image) {
            if ($image->is_primary) {
                // Set all other images for the same product to false
                static::where('product_id', $image->product_id)
                    ->where('id', '!=', $image->id)
                    ->update(['is_primary' => false]);
            }
        });

        static::created(function ($image) {
            $hasPrimary = static::where('product_id', $image->product_id)
                ->where('is_primary', true)
                ->exists();

            if (! $hasPrimary) {
                $image->update(['is_primary' => true]);
            }
        });

    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
