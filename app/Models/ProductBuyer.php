<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductBuyer extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the products for the ProductBuyer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    /**
     * Get all of the buyer for the ProductBuyer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buyer(): HasMany
    {
        return $this->hasMany(Buyer::class, 'buyer_id', 'id');
    }
}
