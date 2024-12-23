<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tours_destination_detail extends Model
{
    protected $fillable = [
        'destination_id',
        'tour_id',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
