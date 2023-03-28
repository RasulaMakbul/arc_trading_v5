<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buyer extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the vendorContact for the Vendor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendorContact(): HasMany
    {
        return $this->hasMany(VendorContact::class, 'contact_id', 'id');
    }
}
