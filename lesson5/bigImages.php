<?php
include_once "config.php";
$sql="UPDATE images SET count=count+1 WHERE id={$_GET['id']}";
if(mysqli_query($connect,$sql)){
    echo "Увеличено";
}
?>

<h1>Исходное изображение</h1>
<img src="bigImages/<?= $_GET['img']?>" alt=""><br>
<a href="<?= $_SERVER['HTTP_REFERER']?>">Вернуться назад</a>