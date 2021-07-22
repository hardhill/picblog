@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.update',['id'=> $post->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Редактировать пост</h2>
        @include('posts.parts.form')
        <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
    </form>

@endsection
