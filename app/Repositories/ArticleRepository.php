<?php
namespace App\Repositories;

use App\Article;

class ArticleRepository extends Repository
{
    function __construct(Article $model){
        $this->model = $model;
    }

    function getLastArticle($int){
        $limit = (int)$int;
        $res = $this->model->select('id','name','alias','content','image_max')->orderBy('id','desc')->limit($limit)->get();
        $res->load('tag');
        return $res;
    }

    function getAllLastArticlePaginate($int){
        $paginate = (int)$int;
        $res = $this->model->select('id','name','alias','content','image_min')->orderBy('id','desc')->paginate($paginate);
        $res->load('tag');
        return $res;
    }

    function getAliasArticle($slug){
        $alias = $slug;
        $res = $this->model->select('id','name','alias','content','image_max')->where('alias',$alias)->first();
        $res->load('tag');
        $res->load('view');
        $res->load('comment');
        $res->load('like');
        return $res;
    }
}
