<?php

include_once "config.php";
if($_POST['text']){
    $text=strip_tags($_POST['text']);

    $sql="INSERT INTO reviews (text) VALUES ('$text')";
    if(mysqli_query($connect,$sql)){
        header('Location: form.php');
    }
}
if($_GET['action']==='login'){
    session_start();
    $salt = "sadefwrqwqwe";
    $login = $_POST['login'] ? strip_tags($_POST['login']) : "";
    $pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";
    $pass = $salt.md5($pass).$salt;


    $sql = "select id from users where login='$login' and pass='$pass'";
    $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
    $data=mysqli_fetch_assoc($res);

if(mysqli_num_rows($res)){
    $_SESSION['login'] = $login;
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['id_user'] = $data['id'];
    header("Location: index.php");
}else {
    header("Location: login.php?success=none");
}
}

if($_GET['action']==='register'){
    $login =  strip_tags($_POST['login']);
    $pass =  strip_tags($_POST['pass']);
    $salt = "sadefwrqwqwe";
    $pass = $salt.md5($pass).$salt;
    $sql = "INSERT INTO users (login,pass) VALUES ('$login','$pass')";
    if(mysqli_query($connect,$sql)){
        header('Location: login.php');
    }
}

if($_GET['action']==='buy'){
    session_start();
    $good_id = ($_GET['id']);
    $sql = "select * from cart where good_id=$good_id and user_id=".$_SESSION['id_user'];
    $res = mysqli_query($connect,$sql);
    if(mysqli_num_rows($res) > 0){
        $s= "UPDATE cart SET count=count+1 WHERE good_id=$good_id";
        $res = mysqli_query($connect,$s);
        header("Location: cards.php?good_id=$good_id");
    }else{
        $s = "INSERT INTO cart (good_id,count,user_id) VALUES ($good_id,1,1)";
        $res =mysqli_query($connect,$s);
        header("Location: cards.php?good_id=$good_id");
    }
    
}

if($_GET['action']==='order'){
    session_start();
    $sum =  $_GET['summ'];
    $user_id=$_SESSION['id_user'];
    $sql = "INSERT INTO orders (id_user,status_order,totalSum) VALUES ($user_id,1,$sum)";
    if(mysqli_query($connect,$sql)){
        header('Location: cart.php?orderSuccess=true');
    }
}

if($_GET['action']==='changeOrder'){
    session_start();
    $status=  $_POST['status'];
    $id=$_GET['id'];
    $sql = "UPDATE orders SET status_order = $status where id=$id";
    if(mysqli_query($connect,$sql)){
        header('Location: orders.php');
    }
}