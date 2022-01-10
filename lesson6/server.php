<?php

include_once "config.php";
$text=strip_tags($_POST['text']);

$sql="INSERT INTO reviews (text) VALUES ('$text')";
if(mysqli_query($connect,$sql)){
    header('Location: form.php');
}