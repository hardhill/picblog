@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.index') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Создать пост</h2>
        @include('posts.parts.form')
        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>

@endsection
