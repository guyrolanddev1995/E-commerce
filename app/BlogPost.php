<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'categorie_id', 'slug', 'title', 'description', 'content', 'image', 'status'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Str::slug($value, '-');
    }

    public function categorie()
    {
        return $this->belongsTo(BlogCategorie::class);
    }
}
