<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="link_wrapper">
        <a href="cards.php" class="link">Товары</a>
        </div>
        
        <?php
        if($_SESSION['login']==='admin'):?>
        <div class="link_wrapper">
        <a href="admin.php" class="link">Админ-панель</a>
        </div>
        <?php
         endif;
        ?>
        <?php
        if($_SESSION['login']&&$_SESSION['login']!=="admin"):?>
        <div class="link_wrapper">
        <a href="ordersUser.php" class="link">Ваши заказы</a>
        </div>
        <?php
         endif;
        ?>
        <div class="link_wrapper">
        <a href="login.php" class="link">Вход</a>
        </div>
        <div class="link_wrapper">
        <a href="register.php" class="link">Регистрация</a>
        </div>
        <div class="link_wrapper">
        <a href="cart.php" class="link">Корзина</a>
        </div>
        <div class="link_wrapper">
        <a href="form.php" class="link">Отзывы</a>
        </div>
    </div>
    <div class="content">
        <h1 class="title">Добро пожаловать в наш магазин!</h1>
    </div>
    
    
</body>
</html>