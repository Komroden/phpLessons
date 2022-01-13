<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php


include_once "config.php";
$sql="select * from reviews";
$res= mysqli_query($connect,$sql);
echo "<div class=header>";
echo "<h1>Отзывы</h1>";
echo "</div>";
echo "<div class=wrapperRewiews>";

while($data= mysqli_fetch_assoc($res)):?>
<div class="cartRewiews">
    
    <p ><?= $data["text"]?></p>
    </div>
    
    
     <?php
     endwhile;
    ?>

<form class="form formLogin" action='server.php' method='post'>
    <p class="formLabel">Введите отзыв</p>
                <input class="formInput"  type='text' name='text'/>
                <input style="margin-top:20px" class="formInput" type='submit' value ='Отправить'>
 </form>
 <?php
 echo "</div>";


