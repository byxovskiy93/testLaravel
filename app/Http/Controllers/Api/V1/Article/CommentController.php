<?php

namespace App\Http\Controllers\Api\V1\Article;

use App\ArticleComment;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleCommentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class CommentController extends Controller
{
    private $articleCommentRepository;

    function __construct(){
        $this->articleCommentRepository = new ArticleCommentRepository(new ArticleComment());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $validate = Validator::make($request->all(),[
        'subject' => 'required|max:255',
        'body' => 'required'
    ]);

        if($validate->fails()){

            $error = [];
            $response = $validate->messages();

            foreach ($response->all() as $key => $value) {
                $error[$key] = ['status' => $value ,'type'=> 'error'];
            }

            return response()->json($error, 200);
        }



        $result = $this->articleCommentRepository->createComment($request);



        return response()->json(['status' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
