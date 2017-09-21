@include('until/logged/header')
{{--@section('content')--}}
<!-- Page Content -->
<div id="page-wrapper">
    <?php
        function discoloration($str,$keyword){
           return str_replace($keyword,"<span style='color: red;'>$keyword</span>",$str);
        }
    ?>
    <div class="container">

        <div class="form-group">
            <h3><b>Search : {{$keyword}}</b></h3>
        </div>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif

        @foreach($post as $p)
            <div>
                <div class="form-group" style="color: blue; font-size: 20px">
                    {!!discoloration($p->title,$keyword)!!}
                </div>

                <div class="form-group">
                    {!!discoloration($p->summary,$keyword)!!}
                </div>

                <div class="form-group">
                    <div>
                        <img alt="" width="100%" height="400"
                             src="/storage/images/post/{{$p->image}}">
                    </div>
                </div>

                <div class="form-group">
                    {!!discoloration($p->content,$keyword)!!}
                </div>

                <div class="center" style="text-align: right"> <i>Ngày viết: {{$p->created_at}}</i></div>
                <br>
                @endForeach
            </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<div>
    {{$post->links()}}
</div>

<!-- /#page-wrapper -->

{{--@endsection--}}


