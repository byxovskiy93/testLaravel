<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{

    protected $table = 'article_tags';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function article()
    {
        return $this->belongsToMany(ArticleTag::class,'article_tag','tag_id','article_id');
    }
}
