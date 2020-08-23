<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/','Site\IndexController',[
    'only' =>['index'],
    'names' => ['index' => 'site']
]);

Route::resource('/articles','Site\ArticleController',[

    'names' => [
        'index' => 'articles',
        'show' => 'articles.show',
    ]

]);



Route::group(['prefix' => 'api/v1/article', 'namespace' => 'Api\V1\Article', 'as' => 'api_'], function () {

    Route::resource('view', 'ViewController',[
        'only' =>['store'],
        'names' => [
            'store' => 'article_view.store',
        ]
    ]);

    Route::resource('like', 'LikeController',[
        'only' =>['store'],
        'names' => [
            'store' => 'article_like.store',
        ]
    ]);

    Route::resource('comment', 'CommentController',[
        'only' =>['store'],
        'names' => [
            'store' => 'article_comment.store',
        ]
    ]);

});
