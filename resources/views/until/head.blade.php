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
<div class="container">
    {{--start header--}}
    <header class="row">
        <div class="col-md-3">
            <a href="">write a story</a>
        </div>
        <div class="col-md-4">
            <a href="#">News</a>
        </div>
        <div class="col-md-5" style="text-align: center">
            <form>
                <input type="text" name="search" placeholder="Search">
            </form>
            <p><a href="/login">sign in</a> / <a href="/login">sign up</a></p>
        </div>
    </header>
    {{--end header--}}
    {{--start nav--}}
    <nav class="row">
        <ul>
            <li><a href="">Home</a></li>
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
{{--end nav--}}
