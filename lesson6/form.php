<style>
    .wrapper{
        display:flex;
        justify-content:center;
        align-items:center;
        margin-top:100px;
        flex-direction:column;
    }
    form{
        margin-top:300px;
    }
</style>

<?php


include_once "config.php";
$sql="select * from reviews";
$res= mysqli_query($connect,$sql);
echo "<div class=wrapper>";

while($data= mysqli_fetch_assoc($res)):?>
    
    <p><?= $data["text"]?></p>
    
    
    
     <?php
     endwhile;
    ?>

<form action='server.php' method='post'>
    <p>Введите отзыв</p>
                <input type='text' name='text'/>
                <input type='submit' value ='Отправить'>
 </form>
 <?php
 echo "</div>";


