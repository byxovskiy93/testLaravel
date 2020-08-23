<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleLike extends Model
{
    protected $table = 'article_like';
    public $timestamps = false;

    protected $fillable = [
        'like','article_id'
    ];

}
