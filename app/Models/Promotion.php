<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'discount_rate',
        'start_date',
        'end_date',
    ];

    public function promotion_codes(){
        return $this->hasMany(PromotionCode::class);
    }

    public function product_categories()
    {
        return $this->belongsToMany(ProductCategory::class,'promotion_categories');
    }
}
