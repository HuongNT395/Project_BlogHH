<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title>News</title>
</head>
<body>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=246006722589120";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
    {{--start header--}}
    <header class="row">
        <div class="col-md-3">
            <a href="{{route('post.logged.addForm')}}">write a story</a>
        </div>
        <div class="col-md-4">
            <a href="#">News</a>
        </div>
        <div class="col-md-5" style="text-align: center">
            <form action="{{route('search')}}" method="get" role="search">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="input-group">
                    <input type="text" name="keyword" placeholder="Search" style="margin-top: 5px">
                </div>
            </form>
            <p><a href="">sign in</a> / <a href="#">sign up</a></p>
        </div>
    </header>
    <nav class="row">
        <ul>
            <li><a href="">Home</a></li>
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>

