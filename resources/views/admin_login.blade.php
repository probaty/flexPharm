<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="d-flex justify-content-center align-content-center" style="height: 100vh; width: 100vw;">
        <form class="align-self-center admin-form" method="post" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="login">Логин</label>
                <input name="name" type="text" class="form-control" id="login" aria-describedby="login" placeholder="Введите логин" style="border: rgb(191, 191, 191) solid 1px">
                @error('name')
                <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Пароль" style="border: rgb(191, 191, 191) solid 1px">
                @error('password')
                <small id="LoginError" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
</body>
</html>
