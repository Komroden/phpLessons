<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class=header>
<h1>Регистрация</h1>
</div>
<form class="form formLogin" action="server.php?action=register" method="post">
    <p class="formLabel">Ваш логин</p>
    <input class="formInput" type="text" name="login">
    <p class="formLabel">Введите пароль</p>
    <input class="formInput" type="password" name="pass"><br><br>
    <input class="formInput" type="submit" value="Зарегистрироваться">
</form>