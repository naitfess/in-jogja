<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination_rating extends Model
{
    protected $fillable = [
        'destination_id',
        'user_id',
        'star',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
