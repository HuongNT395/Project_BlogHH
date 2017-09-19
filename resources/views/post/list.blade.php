@include('until/head')
    <article class="row" id="introduce">
        <div class="col-md-6">
            <h2>Interesting ideas that set your mind in motion.</h2>
            <h4>Hear directly from the people who know it best. From tech to politics to creativity and more — whatever your interest, we’ve got you covered.</h4>
            <p>
                <a href="#"><button class="button button-blue">Get started</button></a>
                <a href="#"><button>Learn more</button></a>
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('storage/images/post/tuoi22.jpg')}}" class="img-responsive">
        </div>
    </article>
    <article class="tops row">
        <p>
            <a><b>Tops story</b></a>
            <a href="{{route('post.like')}}" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <ul>
            @foreach($postsDay as $postDay)
                <li class="col-md-6">
                    <div class="common">
                        <div class="image">
                            <a href="{{route('post.detail', ['id'=>$postDay->id])}}"><img src="{{asset('storage/images/post/'.$postDay->image)}}"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{route('post.detail', ['id'=>$postDay->id])}}">{{$postDay->title}}</a></h2>
                            <h5>{!! $postDay->summary !!}</h5>
                            <a href="{{route('post.detail', ['id'=>$postDay->id])}}" style="float: right">Xem chi tiết</a>
                        </div>
                        <div class="author">
                            <div class="au">
                                <div id="au_img">
                                    <img src="{{asset('storage/images/avartar/'.$postDay->user->avatar)}}" class="img-circle">
                                </div>
                                <div id="au_info">
                                    <a href="#">{{$postDay->user->name}}</a><br>
                                    <i>{{$postDay->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                <a href="{{route('post.actionLike', ['id'=>$postDay->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                <label name="number">{{$postDay->like}}</label>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
    {{--@foreach($categories as $category)--}}
    <article class="tops row">
        <p>
            <a><b>Films</b></a>
            <a href="{{route('post.film')}}" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <ul>
            @foreach($postsFilm as $postFilm)
                <li class="col-md-6">
                    <div class="common">
                        <div class="image">
                            <a href="{{route('post.detail', ['id'=>$postFilm->id])}}"><img src="{{asset('storage/images/post/'.$postFilm->image)}}"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{route('post.detail', ['id'=>$postFilm->id])}}">{{$postFilm->title}}</a></h2>
                            <h5>{{$postFilm->summary}}</h5>
                            <a href="{{route('post.detail', ['id'=>$postFilm->id])}}" style="float: right">Xem chi tiết</a>
                        </div>
                        <div class="author">
                            <div class="au">
                                <div id="au_img">
                                    <img src="{{asset('storage/images/avartar/'.$postFilm->user->avatar)}}" class="img-circle">
                                </div>
                                <div id="au_info">
                                    <a href="#">{{$postFilm->user->name}}</a><br>
                                    <i>{{$postFilm->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                    <a href="{{route('post.actionLike', ['id'=>$postFilm->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                    <label name="number">{{$postFilm->like}}</label>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
    {{--@endforeach--}}
    <article class="tops row">
        <p>
            <a href="#"><b>Fashion</b></a>
            <a href="{{route('post.fashion')}}" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <ul>
            @foreach($postsFashion as $postFashion)
                <li class="col-md-6">
                    <div class="common">
                        <div class="image">
                            <a href="{{route('post.detail', ['id'=>$postFashion->id])}}"><img src="{{asset('storage/images/post/'.$postFashion->image)}}"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{route('post.detail', ['id'=>$postFashion->id])}}">{{$postFashion->title}}</a></h2>
                            <h5>{{$postFashion->summary}}</h5>
                            <a href="{{route('post.detail', ['id'=>$postFashion->id])}}" style="float: right">Xem chi tiết</a>
                        </div>
                        <div class="author">
                            <div class="au">
                                <div id="au_img">
                                    <img src="{{asset('storage/images/avartar/'.$postFashion->user->avatar)}}" class="img-circle">
                                </div>
                                <div id="au_info">
                                    <a href="#">{{$postFashion->user->name}}</a><br>
                                    <i>{{$postFashion->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                    <a href="{{route('post.actionLike', ['id'=>$postFashion->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                    <label name="number">{{$postFashion->like}}</label>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@include('until/footer')
