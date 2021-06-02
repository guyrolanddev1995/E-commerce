<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherant extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'country', 'city', 'status'
    ];
}
