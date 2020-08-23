<?php
namespace App\Repositories;

use App\ArticleView;

class ArticleViewRepository extends Repository
{
    function __construct(ArticleView $model){
        $this->model = $model;
    }


    function createAndUpdateView($id){

        $article_id = (int)$id;

        $finArticle = $this->model->where('article_id',$article_id)->first();

        $result = false;

        if(!empty($finArticle)){

            $result = $finArticle->increment('views');
            return ['views' => $finArticle->views++];

        }else{

            $data = ['article_id' => $article_id,'views' => 1];
            $result  = $this->model->create($data);
            return ['views' => 1];

        }

    }

}
