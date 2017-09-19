@include('until/header')
<article id="author" class="row">
    <div class="au_detail">
        <div class="col-md-3">
            <img src="{{asset('storage/images/avartar/'. $post->user->avatar)}}" class="img-circle">
        </div>
        <div class="col-md-9">
            <a href="#"><b>{{$post->user->name}}</b></a><br>
            Email: <a href="mailto:{{$post->user->email}}">{{$post->user->email}}</a><br>
            <i>{{$post->updated_at}}</i>
        </div>
    </div>

</article>
<article class="contents row">
    <img id="images" class="img-responsive" src="{{asset('storage/images/post/'. $post->image)}}">
    <h1>{{$post->title}}</h1>
    <h1>{!! $post->summary !!}</h1>
    <h4>{!! $post->content !!}</h4>
</article>
@include('until/footer')