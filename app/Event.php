<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    protected $casts = [
        'actors' => 'json'
    ];
}