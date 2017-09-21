@include('until/logged/header')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center; color: blue">Thêm bài viết
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
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

                <form action="{{route('added')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value={{csrf_token()}}>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $cate)
                            <option value={{$cate->id}}>{{$cate->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="title" placeholder="Nhập vào tiêu đề" />
                    </div>

                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="summary"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" class="form-control ckeditor" rows="4" name="conten"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Ảnh</label>
                        <div>
                            <input type="file" class="form-control"
                                   name="image" aria-describedby="basic-addon1"
                                   value="">
                        </div>
                    </div>

                    <div style="text-align: center">
                        <button type="submit" class="btn btn-info" style="color: white">Thêm bài viết</button>
                        <input type="button" value="Quay lại" class="btn btn-info" onclick="location.href='../user/post/danhsach'">
                    </div>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

