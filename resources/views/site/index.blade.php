@extends('layouts.site.page')

@section('css')
    <!-- Bootstrap core CSS -->
    <link href="{{asset(config('setting.theme'))}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset(config('setting.theme'))}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset(config('setting.theme'))}}/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="{{asset(config('setting.theme'))}}/assets/css/owl.css">
    <link rel="stylesheet" href="{{asset(config('setting.theme'))}}/assets/css/custom.css">

@endsection

@section('menu')
    {!! $menu !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('script')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset(config('setting.theme'))}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset(config('setting.theme'))}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{asset(config('setting.theme'))}}/assets/js/custom.js"></script>
    <script src="{{asset(config('setting.theme'))}}/assets/js/owl.js"></script>
    <script src="{{asset(config('setting.theme'))}}/assets/js/slick.js"></script>
    <script src="{{asset(config('setting.theme'))}}/assets/js/isotope.js"></script>
    <script src="{{asset(config('setting.theme'))}}/assets/js/accordions.js"></script>

    <script language = "text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
            if(! cleared[t.id]){                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value='';         // with more chance of typos
                t.style.color='#fff';
            }
        }
    </script>
@endsection
