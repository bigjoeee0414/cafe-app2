<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'name',
        'address',
        'tel',
        'opening',
        'closed',
        'body',
    ];
}
