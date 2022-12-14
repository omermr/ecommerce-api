<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sku',
        'quantity_in_stock',
        'product_image',
        'price',
    ];

    public function order_lines(){
        return $this->hasMany(OrderLine::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function variation_options()
    {
        return $this->belongsToMany(VariationOption::class,'product_fillters');
    }

    public function carts(){
        return $this->belongsToMany(Cart::class,'cart_items');
    }

}
