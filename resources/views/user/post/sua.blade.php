@extends('user.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bài viết
                        <small>{{$post->title}}</small>
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

                    <form action="user/post/sua/{{$post->id}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <select class="form-control" name="category">
                                @foreach($category as $cate)
                                    <option
                                        @if($post-> category->id == $cate->id)
                                            {{"selected"}}
                                        @endif
                                        value = "{{$cate->id}}"> {{$cate->name}}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="title" value="{{$post->title}}"/>
                        </div>

                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea id="demo" class="form-control ckeditor" rows="3" name="summary">{{$post->summary}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="demo" class="form-control ckeditor" rows="4" name="conten" >{{$post->content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <div>
                                <img alt="" width="80" height="60"
                                     src="/storage/images/post/{{$post->image}}">
                            </div>
                            <div>
                                <input type="file" class="form-control"
                                       name="image" aria-describedby="basic-addon1"
                                       value="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default">Sửa bài viết</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection
