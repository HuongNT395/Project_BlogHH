@extends('layouts.app')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container">
        <a href="../../user/post/them">Thêm bài viết</a>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: blue; text-align: center">Bài viết của bạn</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

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

                <div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="sua/{{$p->id}}"> Sửa bài viết </a></div>
                <div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$p->id}}"> Xóa bài viết </a></div>
                </div><br>
                @endForeach
        </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection
