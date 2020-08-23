<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(!empty($articles) && count($articles) > 0)
                <div class="all-blog-posts">
                    <div class="row">
                        @foreach($articles as $item)
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{$item->image_min}}" alt="">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="{{route('articles.show',$item->alias)}}"><h4>{{$item->name}}</h4></a>
                                    <p>{{Str::limit($item->content, 300)}}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            @if(!empty($item->tag) && count($item->tag) > 0)
                                                <div class="col-lg-12">
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

                            @if(!empty($articles) and method_exists($articles,'lastPage'))
                                <div class="col-lg-12">

                                <ul class="page-numbers">

                                    @if($articles->currentPage() != 1)
                                        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    @endif

                                    @for($i = 1; $i <= $articles->lastPage(); $i++)
                                        @if($articles->currentPage() == $i)
                                            <li href="{{$articles->appends(request()->input())->url($i)}}" class="active"><a href="#">{{$i}} <span class="sr-only">(current)</span></a></li>
                                        @else
                                            <li>
                                                <a href="{{$articles->appends(request()->input())->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endif
                                    @endfor

                                    @if($articles->currentPage() !== $articles->lastPage())
                                             <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    @endif
                                </ul>

                            </div>

                            @endif

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


