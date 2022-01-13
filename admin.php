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
echo "<h1>Админ панель</h1>";
echo "</div>";
echo "<h2 class=subtitleAdmin>Список товаров</h2>";
echo "<div class=wrapperAdmin>";
while($data= mysqli_fetch_assoc($res)):?>
<div class='admin'>
<p><?= $data["title"]?></p>
<a  href="serverGoods.php?id=<?=$data["id"]?>&action=delete">Удалить</a>
<a  href="change.php?id=<?=$data["id"]?>">Изменить</a>

</div>
 <?php
 endwhile;



echo "</div>";
?>
<div style="width:10%" class="cardCart">
     <a href="orders.php" class="link">Управление заказами</a>
 </div>
<h2 class=subtitleAdmin>Добавление товара</h2>
<form class="form" action="serverGoods.php" method="post" enctype="multipart/form-data">
<p class="formLabel">Введите имя товара</p>
<input class="formInput" type="text" name="title"/>
<p class="formLabel">Введите цену товара</p>
<input class="formInput" type="number" name="price"/>
<p class="formLabel">Введите короткое описание товара</p>
<input class="formInput" type="text" name="short_info"/>
<p class="formLabel">Введите полное описание товара</p>
<input class="formInput" type="text" name="short_info"/>
<p class="formLabel">Выберете файл</p>
<input type="file" name="photo" accept="image/jpeg"/>
<input type="submit" value="Загрузить"/>
</form>
