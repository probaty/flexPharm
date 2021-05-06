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
<body>
    <header>
        <div class="wrap wraper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 " style="background: #FFFFFF !important;">
                <a class="navbar-brand logo" href="{{ route('index')  }}">
                    <img src="/img/logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-md-5 menu justify-content-center">
                        <a class="nav-item nav-link ml-4" href="{{ route('catalog') }}">Каталог</a>
                        <a class="nav-item nav-link ml-4" href="#">О компании</a>
                        <a class="nav-item nav-link ml-4" href="#">Акции</a>


                    </div>
                    <div class="navbar-nav ml-5  ">
                        <a class="nav-item nav-link store" href="#">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ5NyAxODFoLTUyLjc5MWwtMTE1LjQ5Ni0xNDQuMzdjLTUuMTc0LTYuNDY3LTE0LjYxMy03LjUxOC0yMS4wODMtMi4zNDItNi40NjkgNS4xNzUtNy41MTggMTQuNjE0LTIuMzQyIDIxLjA4M2wxMDAuNTAzIDEyNS42MjloLTI5OS41ODJsMTAwLjUwNC0xMjUuNjI5YzUuMTc1LTYuNDY5IDQuMTI2LTE1LjkwOS0yLjM0Mi0yMS4wODMtNi40Ny01LjE3Ni0xNS45MDktNC4xMjYtMjEuMDgzIDIuMzQybC0xMTUuNDk3IDE0NC4zN2gtNTIuNzkxYy04LjI4NCAwLTE1IDYuNzE2LTE1IDE1djMwYzAgOC4yODQgNi43MTYgMTUgMTUgMTVoNDgyYzguMjg0IDAgMTUtNi43MTYgMTUtMTV2LTMwYzAtOC4yODQtNi43MTYtMTUtMTUtMTV6IiBmaWxsPSIjNTM1MWM5IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0ibTkwLjU3NyA0NzAuMTIxYzEuODQgNi40NCA3LjcyNiAxMC44NzkgMTQuNDIzIDEwLjg3OWgzMDJjNi42OTcgMCAxMi41ODMtNC40MzkgMTQuNDIzLTEwLjg3OWw1Ni44OTEtMTk5LjEyMWgtNDQ0LjYyOHptMjM0LjEyNy02Ni41ODYgMTUtOTBjMS4zNjItOC4xNzIgOS4wOS0xMy42OTYgMTcuMjYyLTEyLjMzIDguMTcyIDEuMzYyIDEzLjY5MiA5LjA5IDEyLjMzIDE3LjI2MmwtMTUgOTBjLTEuMjIzIDcuMzM3LTcuNTc4IDEyLjUzNy0xNC43NzggMTIuNTM3LS44MTkgMC0xLjY0OS0uMDY3LTIuNDg0LS4yMDctOC4xNzItMS4zNjItMTMuNjkyLTkuMDkxLTEyLjMzLTE3LjI2MnptLTgzLjcwNC04Ny41MzVjMC04LjI4NCA2LjcxNi0xNSAxNS0xNXMxNSA2LjcxNiAxNSAxNXY5MGMwIDguMjg0LTYuNzE2IDE1LTE1IDE1cy0xNS02LjcxNi0xNS0xNXptLTg0Ljk2Ni0xNC43OTVjOC4xNzMtMS4zNjEgMTUuOSA0LjE1OCAxNy4yNjIgMTIuMzNsMTUgOTBjMS4zNjIgOC4xNzEtNC4xNTggMTUuOS0xMi4zMyAxNy4yNjItLjgzNC4xMzktMS42NjUuMjA3LTIuNDg0LjIwNy03LjIwMSAwLTEzLjU1NS01LjE5OS0xNC43NzgtMTIuNTM3bC0xNS05MGMtMS4zNjItOC4xNzIgNC4xNTgtMTUuOTAxIDEyLjMzLTE3LjI2MnoiIGZpbGw9IiM1MzUxYzkiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" />
                            <span>Корзина</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="row wraper ">
            <div class="col-lg-3 col-md-6 col-sm-6 footer-2">
                <ul>
                    <li class="header">Компания</li>
                    <li><a href="">О компании</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 footer-3">
                <ul>
                    <li class="header">Для покупателей</li>
                    <li><a href="">Каталог</a></li>
                    <li><a href="">Акции</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer-1 pl-md-5">
                <img src="/img/logo-footer.svg" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 footer-4 pl-md-5" >
                <div class="phone">+7 999 999-99-99</div>
                <div class="created">Разработка сайти Шуктуев Максим</div>
            </div></div>

    </footer>

    <script src="/js/main.js"></script>
</body>
</html>
