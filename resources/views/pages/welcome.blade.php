@extends('main')
@section('title','|Homepage')
@section('content')
<header>
    <h1>Добро пожаловать в мой блог♥</h1>
    <p class="lead">Полезные советы на все случаи жизни!</p>
</header>
<div class="container">
    <div class="row">
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{substr($post->body, 0, -(strlen($post->body)-320))}}...</p>
                    <button type="submit" href="http://localhost:8000/posts/7" class="btn btn-primary btn-lg">Читать далее...</button>
                </div>
            @endforeach

        </div>
    </div>

</div>
@endsection