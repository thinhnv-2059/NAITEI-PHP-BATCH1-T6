<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'product_variant_size')
                    ->withPivot('stock_quantity', 'price')
                    ->withTimestamps();
    }
}