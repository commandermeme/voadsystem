<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'system_id', 'speed', 'speed_limit', 'location'
    ];
}
