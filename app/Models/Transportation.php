<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $fillable = [
        'name',
        'information',
        'picture',
    ];
}
