@extends('layouts.app')
@section('content')
    <a href="../../user/post/them">Thêm bài viết</a>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bài viết
                        <small>all</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            @foreach($post as $p)
                <div class="form-group">
                    <p style >{!!$p->title!!}<p>
                </div>

                <div class="form-group">
                    {!!$p->summary!!}
                </div>

                <div class="form-group">
                    {!!$p->content!!}
                </div>

                <div class="form-group">
                    <div>
                        <img alt="" width="100%" height="450"
                             src="/storage/images/post/{{$p->image}}">
                    </div>
                </div>
                <div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="sua/{{$p->id}}"> Sửa bài viết </a></div>
                <div class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$p->id}}"> Xóa bài viết </a></div>
                @endForeach;
        </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection
