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


<?php




include_once "config.php";
$sql="select * from goods";
$res= mysqli_query($connect,$sql);

// $images = scandir("smallImages");
echo "<div class=header>";
echo "<h1>Товары</h1>";
echo "</div>";
if(!$_SESSION['login']):?>
     <h3 class="titleGood"> Товары могут купить только зарегистрированные пользователи</h3>
<?php
    endif;
    if($_GET['good_id']):?>
    <?php
    $id=$_GET['good_id'];
    $sql="select title from goods where id=$id";
    $res= mysqli_query($connect,$sql);
    $d=mysqli_fetch_assoc($res);
    ?>
        <h3 style="margin-top:20px" class="titleGood"> Товар <?=$d["title"]?> добавлен в корзину</h3>
        <div class="linksCards">
        <div class="link_wrapper">
        <a class="link" href="cards.php">Вернуться к покупкам?</a>
        </div>
        <div style="margin-left:20px" class="link_wrapper">
        <a  class="link" href="cart.php">Перейти в корзину</a>
        </div>
        </div>
   <?php
       endif;
echo "<div class=wrapper>";

while($data= mysqli_fetch_assoc($res)):?>
<div  class="card">
<form action="server.php?action=buy&id=<?=$data["id"]?>" method="post">
<h3 class="titleGood"><?= $data["title"]?></h3>
<a  href="cardsFull.php?id=<?=$data["id"]?>"><img src="images/<?= $data["img"]?>" alt=""></a>
<p class="info">Описание: <?= $data["short_info"]?></p>
<p class="price">Стоймость:<?= $data["price"]?></p>
<?php if($_SESSION['login']):?>
     <input type='submit' value='Купить'>
     <?php
    endif;
?>

</form>

</div>
 <?php
 endwhile;


echo "</div>";

