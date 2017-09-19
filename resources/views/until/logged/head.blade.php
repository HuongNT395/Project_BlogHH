@include('until/logged/header')
    <nav class="row">
        <ul>
            <li><a href="{{route('post.logged.list')}}">Home</a></li>
            @foreach($categories as $category)
                <li><a href="{{route('post.logged.byCategory', ['id' => $category->id])}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
