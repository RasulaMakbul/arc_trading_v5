<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVendor extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the products for the ProductVendor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    /**
     * Get all of the vendor for the ProductVendor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendor(): HasMany
    {
        return $this->hasMany(Vendor::class, 'vendor_id', 'id');
    }
}
