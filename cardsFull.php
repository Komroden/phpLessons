<style>
    .wrapper{
        margin-top:100px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    img{
        border:2px solid black;
        border-radius:5px;
        

    }
    h1{
        margin-top:20px;
        text-align:center;
    }
</style>

<?php

$id=(int)$_GET['id'];


include_once "config.php";
$sql="select * from goods where id=$id";
$res= mysqli_query($connect,$sql);

// $images = scandir("smallImages");
echo "<h1>Goods</h1>";
echo "<div class=wrapper>";
while($data= mysqli_fetch_assoc($res)):?>
<div>
<h3><?= $data["title"]?></h3>
<img src="images/<?= $data["img"]?>" alt="">
<p>Описание: <?= $data["full_info"]?></p>
<p>Стоймость:<?= $data["price"]?></p>
<input type='submit' value="Купить">


</div>
 <?php
 endwhile;



echo "</div>";