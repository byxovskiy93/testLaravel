<?php
namespace App\Repositories;

use App\ArticleComment;

class ArticleCommentRepository extends Repository
{
    function __construct(ArticleComment $model){
        $this->model = $model;
    }

    function createComment($request){

        $data = ['article_id' => $request->id,'subject' => $request->subject,'body' => $request->body];
        $result = $this->model->create($data);
        return $result;

    }
}
