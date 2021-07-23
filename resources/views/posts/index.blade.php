@extends('layouts.layout',['title_page'=>'Главная страница'])

@section('content')
    @if(isset($_GET['search'])&&mb_strlen($_GET['search'])>0)
        @if(count($posts))
            <h2>Результаты поиска по запросу "<?php echo $_GET['search']?>"</h2>
            <p class="lead">Всего найдено постов: {{ count($posts) }}</p>
        @else
            <h2>По запросу "<?php echo $_GET['search']?>" ничего не найдено</h2>
            <a class="btn btn-outline-primary" href="{{ route('post.index') }}">Отобразить все посты</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
            <div class="col-6">
                <div class="card mb-2">
                    <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                    <div class="card-body">
                        <div class="card-img"
                             style="background-image: url('{{ is_null($post->img) ? asset('img/default.jpg'):$post->img }}')"></div>
                        <div class="card-author">Автор: {{ $post->name }}</div>
{{--                        {{ $post->printdata() }}--}}
                        <a href="{{ route('post.show',['id'=>$post->id]) }}" class="btn btn-outline-primary">Посмотреть пост</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if(!isset($_GET['search'])||mb_strlen($_GET['search'])==0)
        <div class="mx-auto mt-2" style="width: max-content;"> {{ $posts->links() }} </div>
    @endif

@endsection
