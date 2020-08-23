<?php

namespace App\Http\Controllers\Site;

use App\Article;
use App\ArticleView;
use App\Repositories\ArticleRepository;
use App\Repositories\ArticleViewRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticleController extends SiteController
{

    private $articleRepository;

    function __construct(){
        $this->template = 'article';
        $this->articleRepository = new ArticleRepository(new Article());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->articleRepository->getAllLastArticlePaginate(10);

        $content = view(config('setting.theme').'.articleContent')->with(['articles' => $articles])->render();

        $this->vars = Arr::add($this->vars,'content',$content);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($alias){

        $article = $this->articleRepository->getAliasArticle($alias);

        $content = view(config('setting.theme').'.articleShow')->with(['article' => $article])->render();

        $this->vars = Arr::add($this->vars,'content',$content);

        return $this->renderOutput();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
