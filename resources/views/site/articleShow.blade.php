<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post" id="article" data-article-comment="{{route('api_article_comment.store')}}" data-article-like="{{route('api_article_like.store')}}" data-article-view="{{route('api_article_view.store')}}" data-article-id="{{$article->id}}">
                                <div class="blog-thumb">
                                    <img src="{{$article->image_max}}" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <h4>{{$article->name}}</h4>
                                    <ul class="post-info">

                                        <li>
                                            <a href="#" id="commentBlock">
                                                <i class="fa fa-comment"></i>
                                                <div class="commentBlockCount">{{$article->comment->count()}}</div>
                                                Comments
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" id="viewBlock">
                                                <i class="fa fa-eye"></i>
                                                <div class="viewBlockCount">
                                                    {{(!empty($article->view)) ? $article->view->views : '0'}}
                                                </div>
                                                Views
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" id="likeBlock">
                                                <i class="fa fa-heart"></i>
                                                <div class="likeBlockCount" >
                                                    {{(!empty($article->like)) ? $article->like->like : '0'}}
                                                </div>
                                                Like
                                            </a>
                                        </li>

                                    </ul>
                                    <p>{!! $article->content !!}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            @if(!empty($article->tags) && count($article->tags) > 0)
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                            @foreach($article->tags as $item)
                                                                <li><a href="#">{{$item->name}}</a></li>
                                                            @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="sidebar-item submit-comment" id="commentFormBlock">
                                <div class="sidebar-heading">
                                    <h2>Your comment</h2>
                                </div>
                                <div class="content">
                                    <form id="comment" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="body" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="main-button">Submit</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
