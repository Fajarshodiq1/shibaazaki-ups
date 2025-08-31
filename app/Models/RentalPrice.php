<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RentalPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'duration',
        'price'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    /**
     * Get the product that owns the rental price.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get available duration options.
     */
    public static function getDurationOptions(): array
    {
        return [
            'daily' => 'Daily',
            'weekly' => 'Weekly', 
            'monthly' => 'Monthly',
            'yearly' => 'Yearly'
        ];
    }

    /**
     * Get formatted price with currency.
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}