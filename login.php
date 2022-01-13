<?php
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class=header>
<h1>Вход</h1>
</div>
<?php
if($_GET['success']==='none'):?>
    <h1>Неверный логин или пароль</h1>
<?php
    endif;
    ?>
<form class="form formLogin" action="server.php?action=login" method="post">
    <p class="formLabel">Ваш логин</p>
    <input class="formInput" type="text" name="login" value="<?= $_SESSION['login']?>">
    <p class="formLabel">Введите пароль</p>
    <input class="formInput" type="password" name="pass" value="<?= $_SESSION['pass']?>"><br><br>
    <input class="formInput" type="submit" value="Войти">
</form>
