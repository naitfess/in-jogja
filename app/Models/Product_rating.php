<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_rating extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'star',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
