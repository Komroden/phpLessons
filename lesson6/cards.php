<style>
    .wrapper{
        margin-top:100px;
        display:grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        grid-gap:20px;
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


include_once "config.php";
$sql="select * from goods";
$res= mysqli_query($connect,$sql);

// $images = scandir("smallImages");
echo "<h1>Goods</h1>";
echo "<div class=wrapper>";
while($data= mysqli_fetch_assoc($res)):?>
<div>
<h3><?= $data["title"]?></h3>
<a  href="cardsFull.php?id=<?=$data["id"]?>"><img src="images/<?= $data["img"]?>" alt=""></a>
<p>Описание: <?= $data["short_info"]?></p>
<p>Стоймость:<?= $data["price"]?></p>


</div>
 <?php
 endwhile;



echo "</div>";