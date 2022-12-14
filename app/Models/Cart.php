<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function product_items(){
        return $this->belongsToMany(ProductItem::class,'cart_items');
    }

}
