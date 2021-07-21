@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.index') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Создать пост</h2>
        <div class="form-group mb-2">
            <input name="title" type="text" class="form-control"  required/>
        </div>
        <div class="form-group mb-2">
            <textarea name="description" rows="3" class="form-control" required></textarea>
        </div>
        <div class="form-group mb-2">
            <input name="img" type="file">
        </div>
        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>

@endsection
