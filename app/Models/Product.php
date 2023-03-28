<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'part_number',
        'nsn',
        'description',
    ];

    /**
     * Get all of the productBuyer for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productBuyer(): HasMany
    {
        return $this->hasMany(ProductBuyer::class, 'buyer_id', 'id');
    }

    /**
     * Get all of the productVendor for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productVendor(): HasMany
    {
        return $this->hasMany(ProductVendor::class, 'vendor_id', 'id');
    }
}
