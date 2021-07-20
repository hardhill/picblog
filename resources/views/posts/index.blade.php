<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <div class="container collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item offset-3">
                    <a class="nav-link active" aria-current="page" href="/">Создать пост</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Найти..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{ $post->short_title }}</div>
                <div class="card-body">{{ $post->description }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
