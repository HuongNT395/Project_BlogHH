@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    {{--<h1 class="page-header">Category--}}
                    {{--<small>{{$category->name}}</small>--}}
                    {{--</h1>--}}
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <h2 style="color: red">Are you sure delete?</h2>

                    <form action="admin/qltintuc/xoa/{{$post->id}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="name" value="{{$post->title}}" disabled="disabled" />
                        </div>

                        <button type="submit" class="btn btn-default">Delete Post</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection;