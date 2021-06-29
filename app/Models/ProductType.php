<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Packages
     *
     * @return hasMany
     */
    public function packages()
    {
        return $this->hasMany(ProductPackage::class, 'type_id');
    }

    /**
     * Products
     *
     * @return hasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
