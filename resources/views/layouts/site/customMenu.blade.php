     @foreach($items as $item)

        @if(URL::current() == URL::to($item['url']) or str_contains(URL::current() ,$item['url']) and $item['url'] !== '/' )
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::to($item['url'])}}">{{$item['name']}}
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{URL::to($item['url'])}}">{{$item['name']}}</a>
            </li>
        @endif

    @endforeach
