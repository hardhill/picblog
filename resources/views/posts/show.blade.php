
@extends('layouts.layout',['title_page'=>"Пост№ $post->id $post->short_title"])

@section('content')
    <div class="row">

            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-header"><h2>{{ $post->title }}</h2></div>
                    <div class="card-body">
                        <div class="card-img card-img__max"
                             style="background-image: url('{{ is_null($post->img) ? asset('img/default.jpg'):$post->img }}')"></div>
                        <div class="card-author">Автор: {{ $post->name }}</div>
                        <div class="card-date">Пост создан: {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</div>
                        <div class="card-btn">
                            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                            <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-outline-success">Редактировать</a>
                            <form action="{{ route('post.destroy',['id'=>$post->id]) }}" method="post" onsubmit="if(confirm('Удалить пост?')){return true}else{return false}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Удалить">
                            </form>

                        </div>

                    </div>
                </div>
            </div>

    </div>

@endsection
