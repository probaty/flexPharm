<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title') Flex.Farm - Интернет аптека @show</title>
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="height: 100vh">
<header>
    <div class="wrap wraper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 " style="background: #FFFFFF !important;">
            <div class="navbar-brand logo" >
                <div class="navbar-brand" >Панель админа</div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav  menu justify-content-center">
                    <a class="nav-item nav-link" href="{{ route('admin') }}">Товары</a>
                    <a class="nav-item nav-link ml-lg-5 ml-md-0" href="#">Категории</a>


                </div>
                <div class="navbar-nav ">
                    <a class="nav-item nav-link" href="{{ route('admin.logout') }}">Выйти</a>
                </div>
            </div>
        </nav>
    </div>

</header>
<main >
    @yield('content')
</main>

</body>
</html>


