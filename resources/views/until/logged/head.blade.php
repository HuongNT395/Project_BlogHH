
@include('until/logged/header')
    <nav class="row">
        <ul>
            <li><a href="">Home</a></li>
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </nav>
{{--end nav--}}
