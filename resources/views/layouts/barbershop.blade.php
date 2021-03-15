<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')BarberShop @show</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header class="header">
    @section('header')
        <div class="container">
            <div class="row">
                <div class="col-md-4 header__menu">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Главная</a>
                        </li>
                        @if(auth()->check())
                            <li>
                                <a href="#">{{ auth()->user()->name }}</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">Выход</a>
                            </li>
                        @else
                        <li>
                            <a href="{{ route('login.create') }}">Вход</a>
                        </li>
                        <li>
                            <a href="{{ route('register.create') }}">Регистрация</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @show
</header>
<main class="main">
@yield('content')
</main>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
