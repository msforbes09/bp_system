<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Type
     *
     * @return belongsTo
     */
    public function type()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }
}
