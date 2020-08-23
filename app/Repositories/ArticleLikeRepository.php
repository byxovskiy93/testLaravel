<?php
namespace App\Repositories;

use App\ArticleLike;

class ArticleLikeRepository extends Repository
{
    function __construct(ArticleLike $model){
        $this->model = $model;
    }

    function createAndUpdateView($id){

        $article_id = (int)$id;

        $finArticle = $this->model->where('article_id',$article_id)->first();

        $result = false;

        if(!empty($finArticle)){

            $result = $finArticle->increment('like');
            return ['like' => $finArticle->like++];

        }else{

            $data = ['article_id' => $article_id,'like' => 1];
            $result = $this->model->create($data);
            return ['like' => 1];

        }

    }

}
