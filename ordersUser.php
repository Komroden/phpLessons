<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class=header>
<h1>Управление заказами</h1>
</div>

<?php
$user_id=$_SESSION['id_user'];
include_once "config.php";
$sql="select orders.id,orders.id_user,orders.status_order,orders.totalSum,orders_status.name from orders 
 INNER JOIN orders_status
 ON orders.status_order=orders_status.id
 where orders.id_user=$user_id";
$res= mysqli_query($connect,$sql);

while($data= mysqli_fetch_assoc($res)):?>
    <div  class="orders">
    <form class="ordersForm" action="server.php?action=changeOrder&id=<?=$data["id"]?>" method="post">
    <h3 class="titleGood"><?= $data["login"]?></h3>
    <p class="info">Сумма: <?= $data["totalSum"]?></p>
    <p class="info">Статус: <?= $data["name"]?></p>
    <select name="status" style="width:50%;margin-top:10px">
        <option value='1'>В работе</option>
        <option value='2'>В ожидании</option>
        <option value='3'>Завершен</option>
        <option value='4'>Отклонен</option>
    </select>
    <input style="width:50%;margin-top:10px" class="formInput" type='submit' value ='Отправить'>
    </form>
    
    </div>
     <?php
     endwhile;