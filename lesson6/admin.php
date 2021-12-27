<style>
    .wrapper{
        display:flex;
        justify-content:center;
        align-items:center;
        margin-top:100px;
        flex-direction:column;
    }
    form{
        margin-top:100px;
    }
    .admin{
        display: flex;
        border:1px solid black;
        justify-content:center;
        align-items:center;
    }
    a{
        margin-left:10px;
    }
</style>

<?php


include_once "config.php";
$sql="select * from goods";
$res= mysqli_query($connect,$sql);

// $images = scandir("smallImages");
echo "<div class=wrapper>";
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

<form action="serverGoods.php" method="post" enctype="multipart/form-data">
<p>Введите имя товара</p>
<input type="text" name="title"/>
<p>Введите цену товара</p>
<input type="number" name="price"/>
<p>Введите короткое описание товара</p>
<input type="text" name="short_info"/>
<p>Введите полное описание товара</p>
<input type="text" name="short_info"/>
<p>Выберете файл</p>
<input type="file" name="photo" accept="image/jpeg"/>
<input type="submit" value="Загрузить"/>
</form>