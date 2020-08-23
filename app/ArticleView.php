<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleView extends Model
{
    protected $table = 'article_view';

    public $timestamps = false;

    protected $fillable = [
        'views','article_id'
    ];
}
