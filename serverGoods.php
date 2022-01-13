<?php

include_once "config.php";
$title=strip_tags($_POST['title']);
$photo=strip_tags($_FILES['photo']['tmp_name']);
$short_info=strip_tags($_POST['short_info']);
$full_info=strip_tags($_POST['full_info']);
$price=strip_tags($_POST['price']);
$path="images/{$_FILES['photo']['name']}";

if($photo){copy($photo,$path);}

$sql="INSERT INTO goods (title,price,img,short_info,full_info) VALUES ('$title','$price','{$_FILES['photo']['name']}','$short_info','$full_info')";
if(mysqli_query($connect,$sql)){
    header('Location: admin.php');
}

$id=(int)($_GET['id']);
$action=strip_tags($_GET['action']);

if($action===delete&&$id){
    $sql="DELETE FROM goods WHERE id=$id";
    if(mysqli_query($connect,$sql)){
        header('Location: admin.php');
    }
}
if($action===edit&&$id){
    $price=$_GET['price'];
    $title=$_GET['title'];
    $short_info=$_GET['short_info'];
    $full_info=$_GET['full_info'];

    $sql="UPDATE goods SET price=$price , title=$title, short_info=$short_info, full_info=$full_info,  WHERE id=$id";
    if(mysqli_query($connect,$sql)){
        header('Location: admin.php');
    }
}