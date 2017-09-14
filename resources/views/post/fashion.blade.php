@include('until/head')
<article class="tops row">
    <p>
        <a><b>Fashion</b></a>
        {{--<a href="#" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>--}}
    </p>
    <ul>
        @foreach($posts as $post)
            <li class="col-md-6">
                <div class="common">
                    <div class="image">
                        <a href=""><img src="{{asset('storage/images/post/'.$post->image)}}"></a>
                    </div>
                    <div class="content">
                        <h2><a href="">{{$post->title}}</a></h2>
                        <h5>{{$post->summary}}</h5>
                        <a href="#" style="float: right">Xem chi tiết</a>
                    </div>
                    <div class="author">
                        <div class="au">
                            <div id="au_img">
                                <img src="{{asset('storage/images/avartar/'.$post->user->avatar)}}" class="img-circle">
                            </div>
                            <div id="au_info">
                                <a href="#">{{$post->user->name}}</a><br>
                                <i>{{$post->updated_at}}</i>
                            </div>
                        </div>
                        <div class="like">
                            <form action="#" method="post">
                                <button type="button" name="like"><span class="glyphicon glyphicon-thumbs-up"></span></button>
                                <label name="number">{{$post->like}}</label>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</article>
@include('until/footer')