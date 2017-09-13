
@extends('admin.layout.index');

@section('content');

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Post
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/tintuc/them" method="post" enctype = "multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name = "category_id">
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Nhập vào tiêu đề" />
                    </div>

                    <div class="form-group">
                        <label>Summary</label>
                        <textarea id = "demo" name="summary" class="form-control ckeditor" rows="2"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea id = "demo" name="content" class="form-control ckeditor" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label>Tác giả</label>--}}
                        {{--@foreach($post as $p)--}}
                            {{--<input type="text" class="form-control" value="{{$p->id}}" name="user">--}}
                        {{--@endforeach--}}
                    {{--</div>--}}


                    <button type="submit" class="btn btn-default">Post Add</button>
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