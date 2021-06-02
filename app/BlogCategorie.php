<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategorie extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];  

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = \Str::slug($value, '-');
    }

    public function articles()
    {
        return $this->hasMany(BlogPost::class);
    }
}
