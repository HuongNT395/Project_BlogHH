@include('until/logged/header')
<article id="author" class="row">
    <div class="au_detail">
        <div class="col-md-3">
            <img src="{{asset('storage/images/avartar/'. $post->user->avatar)}}" class="img-circle">
        </div>
        <div class="col-md-9">
            <a href="{{route('user.post.list')}}"><b>{{$post->user->name}}</b></a><br>
            Email: <a href="mailto:{{$post->user->email}}">{{$post->user->email}}</a><br>
            <i>{{$post->updated_at}}</i>
        </div>

    </div>
</article>
<article class="contents row">
    <img id="images" class="img-responsive" src="{{asset('storage/images/post/'. $post->image)}}">
    <div style="padding: 0 22px">
        <h1>{{$post->title}}</h1>
        {!!  $post->content !!}
        <h1>{!! $post->summary !!}</h1>
        <h4>{!! $post->content !!}</h4>
    </div>
</article>
<div class="fb-comments" data-href="http://localhost:8000/post/detail/" data-numposts="5" style="margin-top: 50px"></div>
@include('until/footer')