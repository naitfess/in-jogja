<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel_picture extends Model
{
    protected $fillable = [
        'hotel_id',
        'picture',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
