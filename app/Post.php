<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $fillable = ['title', 'slug', 'content'];
}
