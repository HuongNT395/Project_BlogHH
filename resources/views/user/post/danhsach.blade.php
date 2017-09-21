@include('until/logged/header')
{{--@section('content')--}}
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container">
         @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
            @foreach($post as $p)
            <div class="disPost">
                <div class="form-group">
                <h3 style="text-align: center"><b><a href="#">{!!$p->title!!}</a></b></h3>
                </div>

                <div class="form-group" style="float: left; width: 30%; padding: 5px">
                    <div>
                        <img alt="" width="100%" height="400"
                             src="/storage/images/post/{{$p->image}}">
                    </div>
                </div>

                <div class="form-group" style="float: left; width: 70%; padding: 5px 15px; font-size: 16px">
                    {!!$p->content!!}
                </div>

                <div class="center" style="text-align: right"> <i>Ngày viết: {{$p->created_at}}</i></div>
                <div class="row" style="text-align: center">
                    <button class="btn btn-info"><a href="sua/{{$p->id}} " style="color: white">Sửa bài viết</a></button>
                    <button class="btn btn-info"><a href="xoa/{{$p->id}}" style="color: white">Xóa bài viết</a></button>
                </div>
                {{--<div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="sua/{{$p->id}}"> Sửa bài viết </a></div>--}}
                {{--<div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$p->id}}"> Xóa bài viết </a></div>--}}
                <br>
            </div>
                @endForeach
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@include('until/footer')

