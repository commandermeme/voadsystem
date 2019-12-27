<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'fname', 'lname', 'address', 'phone', 'licence'
    ];
}
