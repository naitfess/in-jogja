<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'max_capacity',
        'days',
        'hotel_id',
        'information',
        'picture',
        'price',
        'destination_id',
        'transportation_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function transportation()
    {
        return $this->belongsTo(Transportation::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
