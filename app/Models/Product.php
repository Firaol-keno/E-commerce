<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_qty',
        'product_price',
        'product_description',
        'product_code',
        'category_id',
        'thumbnail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItems()
    { 
    return $this->hasMany(Cart::class);
    }
}
