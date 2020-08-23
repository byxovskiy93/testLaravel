<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name','alias','content','image_max','image_min'
    ];

    public function comment(){
        return $this->hasMany(ArticleComment::class,'article_id');
    }

    public function like(){
        return $this->hasOne(ArticleLike::class,'article_id');
    }

    public function view(){
        return $this->hasOne(ArticleView::class,'article_id');
    }

    public function tag(){
        return $this->belongsToMany(ArticleTag::class,'article_tag','article_id','tag_id');
    }


}
