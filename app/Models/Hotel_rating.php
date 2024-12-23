<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel_rating extends Model
{
    protected $fillable = [
        'hotel_id',
        'user_id',
        'star',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
