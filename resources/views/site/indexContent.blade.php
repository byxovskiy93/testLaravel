<section class="blog-posts">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(!empty($articles) && count($articles) > 0)
                <div class="all-blog-posts">
                    <div class="row">
                        @foreach($articles as $item)

                        <div class="col-lg-12">

                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{$item->image_max}}" alt="">
                                </div>

                                <div class="down-content">

                                    <a href="{{route('articles.show',$item->alias)}}"><h4>{{$item->name}}</h4></a>
                                    <p>{{Str::limit($item->content, 400)}}</p>

                                    <div class="post-options">
                                        <div class="row">
                                            @if(!empty($item->tag) && count($item->tag) > 0)
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                            @foreach($item->tag as $item)
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

                        @endforeach

                    </div>
                </div>

                @else
                    <div class="alert alert-info" role="alert">
                        <strong>УПС!</strong> Пусто
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>
