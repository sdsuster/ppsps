<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginInfo extends Model
{
    //
    protected $fillable = [
        'attempt', 'password'
    ];
}
