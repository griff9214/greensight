<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Тестовое задание</title>
</head>
<body>
<div class="container" style="height: 100%;">
    <div class="row align-items-center justify-content-center" style="height: 100%;">
        <div class="col-6">
            <div class="login-form-container">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="exampleInput1">Имя:</label>
                        <input type="text" name="name" class="form-control" id="exampleInput1" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput2">Фамилия:</label>
                        <input type="text" name="secondName" class="form-control" id="exampleInput2" placeholder="Введите фамилию">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput3">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInput3" placeholder="Введите email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput4">Пароль:</label>
                        <input type="password" name="password" class="form-control" id="exampleInput4" placeholder="Введите пароль">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput5">Подтвердите пароль:</label>
                        <input type="password" name="passwordConfirmation" class="form-control" id="exampleInput5" placeholder="Введите подтверждение пароля">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/assets/js/scripts.js"></script>
</body>
</html>