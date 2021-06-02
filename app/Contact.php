<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable  = [
        'nom', 'prenom', 'email', 'telephone', 'message', 'is_read'
    ];
}
