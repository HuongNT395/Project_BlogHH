@include('until/logged/header')
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div style="text-align: center">
                   <form class="form-group" method="post" action="{{route('user.post.delete', ['id'=> $post->id])}}">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <h2 style="color: red">Bạn chắc chắn xóa bài viết?</h2>
                       <h3>{{$post->title}}</h3>
                       <input type="button"  value="Quay lại" class="btn btn-info"
                              onclick="location.href='{{route('user.post.list')}}'">
                       <button type="submit" class="btn btn-warning">Xóa</button>
                   </form>
            </div>
        </div>
    </div>
</div>
@include('until/footer')


