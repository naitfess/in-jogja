<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'information',
        'user_id',
        'picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
