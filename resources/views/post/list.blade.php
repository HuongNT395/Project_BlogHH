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
            <a><b>Tops story by like</b></a>
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
                                    <a href="{{route('user.post.list')}}">{{$postDay->user->name}}</a><br>
                                    <i>{{$postDay->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                <a href="{{route('post.actionLikeList', ['id'=>$postDay->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
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
            <a><b>Tops story by time</b></a>
            <a href="{{route('post.time')}}" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <ul>
            @foreach($postsTime as $postTime)
                <li class="col-md-6">
                    <div class="common">
                        <div class="image">
                            <a href="{{route('post.detail', ['id'=>$postTime->id])}}"><img src="{{asset('storage/images/post/'.$postTime->image)}}"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{route('post.detail', ['id'=>$postTime->id])}}">{{$postTime->title}}</a></h2>
                            <h5>{{$postTime->summary}}</h5>
                            <a href="{{route('post.detail', ['id'=>$postTime->id])}}" style="float: right">Xem chi tiết</a>
                        </div>
                        <div class="author">
                            <div class="au">
                                <div id="au_img">
                                    <img src="{{asset('storage/images/avartar/'.$postTime->user->avatar)}}" class="img-circle">
                                </div>
                                <div id="au_info">
                                    <a href="{{route('user.post.list')}}">{{$postTime->user->name}}</a><br>
                                    <i>{{$postTime->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                    <a href="{{route('post.actionLikeList', ['id'=>$postTime->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                    <label name="number">{{$postTime->like}}</label>
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
            <a href="#"><b>Tops story by category</b></a>
            <a href="{{route('post.category')}}" style="float: right"><b>More</b><span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <ul>
            @foreach($postsCategory as $postCategory)
                <li class="col-md-6">
                    <div class="common">
                        <div class="image">
                            <a href="{{route('post.detail', ['id'=>$postCategory->id])}}"><img src="{{asset('storage/images/post/'.$postCategory->image)}}"></a>
                        </div>
                        <div class="content">
                            <h2><a href="{{route('post.detail', ['id'=>$postCategory->id])}}">{{$postCategory->title}}</a></h2>
                            <h5>{{$postCategory->summary}}</h5>
                            <a href="{{route('post.detail', ['id'=>$postCategory->id])}}" style="float: right">Xem chi tiết</a>
                        </div>
                        <div class="author">
                            <div class="au">
                                <div id="au_img">
                                    <img src="{{asset('storage/images/avartar/'.$postCategory->user->avatar)}}" class="img-circle">
                                </div>
                                <div id="au_info">
                                    <a href="{{route('user.post.list')}}">{{$postCategory->user->name}}</a><br>
                                    <i>{{$postCategory->updated_at}}</i>
                                </div>
                            </div>
                            <div class="like">
                                    <a href="{{route('post.actionLikeList', ['id'=>$postCategory->id])}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                    <label name="number">{{$postCategory->like}}</label>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </article>
@include('until/footer')
