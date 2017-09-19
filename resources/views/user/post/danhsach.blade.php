@include('until/logged/header')
{{--@section('content')--}}
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container">
            @foreach($post as $p)
            <div>
                <div class="form-group">
                <h3><center><b>{!!$p->title!!}</b></center></h3>
                </div>

                <div class="form-group">
                    {!!$p->summary!!}
                </div>

                <div class="form-group">
                    <div>
                        <img alt="" width="100%" height="400"
                             src="/storage/images/post/{{$p->image}}">
                    </div>
                </div>

                <div class="form-group">
                    {!!$p->content!!}
                </div>

                <div class="center" style="text-align: right"> <i>Ngày viết: {{$p->created_at}}</i></div>
                <div class="row" style="text-align: center">
                    <button class="btn btn-info"><a href=sua/{{$p->id}}" style="color: white">Sửa bài viết</a></button>
                    <button class="btn btn-info"><a href=xoa/{{$p->id}}" style="color: white">Xóa bài viết</a></button>
                </div>
                {{--<div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="sua/{{$p->id}}"> Sửa bài viết </a></div>--}}
                {{--<div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$p->id}}"> Xóa bài viết </a></div>--}}
                <br>
                @endForeach
        </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

{{--@endsection--}}
