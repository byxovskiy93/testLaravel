<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $table = 'article_comment';

    public $timestamps = false;

    protected $fillable = [
        'subject','body','article_id'
    ];
}
