@include('until/logged/header')
<div id="page-wrapper" style="margin-bottom: 215px">
    <div class="container">
        <div class="row">
            <div style="text-align: center">
                   <form class="form-group" method="post" action="{{route('user.post.delete', ['id'=> $post->id])}}">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <h2 style="color: red">Are you sure delete this post?</h2>
                       <h3>{{$post->title}}</h3>
                       <input type="button"  value="Back" class="btn btn-info"
                              onclick="location.href='{{route('user.post.list')}}'">
                       <button type="submit" class="btn btn-warning">Delete</button>
                   </form>
            </div>
        </div>
    </div>
</div>
@include('until/footer')


