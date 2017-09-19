@extends('layouts.app')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container">
            <div class="row">
                       <form class="form-group" method="post" action="{{route('user.post.delete', ['id'=> $post->id])}}">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <h2>{{$post->title}}</h2>
                           <h2>Bạn chắc chắn xóa bài viết?</h2>
                           <button><a href="{{route('user.post.list')}}">Cancle</a></button>
                           <button type="submit">OK</button>
                       </form>
            </div>
        </div>
            <!-- /.row -->
    </div>
        <!-- /.container-fluid -->
    <!-- /#page-wrapper -->

@endsection;
