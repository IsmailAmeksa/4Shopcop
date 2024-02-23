<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function types()
    {
    	return $this->hasMany(Type::class);
        
    }
    public function getDiscountedPriceAttribute()
    {
        $discountedPrice = $this->price - ($this->price * ($this->discount / 100));
        return number_format($discountedPrice, 2, '.', '');
    }
    
}
