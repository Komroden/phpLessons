<?php
include_once "config.php";
session_start();
$login= $_SESSION['login'];
$pass= $_SESSION['pass'];

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php


    $sql="select * from cart INNER JOIN goods
    ON cart.good_id=goods.id
    INNER JOIN users
    ON cart.user_id=users.id   
    where users.login='$login'";
    $result= mysqli_query($connect,$sql);
    
?>
<div class=header>
 <h1>Корзина</h1>
 </div>
 <?php if($_GET['orderSuccess']):?>
     <h1 style="color:green" class="titleGood"> Заказ оформлен!</h1>
<?php
    endif;
    ?>
 <div class="cartWrapper">
 <?php
while($data= mysqli_fetch_assoc($result)):?>

<div class="cardCart">
<h3 class="titleGood"><?= $data["title"]?></h3>

<p class="price">Стоймость:<?= $data["price"]?></p>
<p class="price">Количество:<?= $data["count"]?></p>
<?php
$total += ($data["price"]*$data["count"]);
?>

 

</div>
 <?php
 endwhile;
 ?>
 </div>
 <div style="width:20%"  class="cardCart">
 <p class="price">Общая сумма: <?= $total?> </p>
 </div>
 <?php
 if(mysqli_num_rows($result)>0):?>
     <div style="width:10%" class="cardCart">
     <a href="server.php?action=order&summ=<?=$total?>" class="link">Оформить заказ</a>
 </div>
<?php
    endif;
    ?>
 


