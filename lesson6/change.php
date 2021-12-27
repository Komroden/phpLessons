<script>
    function save(id){
    
let price=document.getElementById('price').value;
let title=document.getElementById('title').value;
let short_info=document.getElementById('short_info').value;
let full_info=document.getElementById('full_info').value;
location.href='serverGoods.php?action=edit&id='+id+'&price='+price+'&title='+title+'&short_info='+short_info+'&full_info='+full_info;
}

</script>

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
    
</style>

<?php


include_once "config.php";
$id=(int)($_GET['id']);
$sql="select * from goods where id=$id";
$res= mysqli_query($connect,$sql);

// $images = scandir("smallImages");
echo "<div class=wrapper>";
while($data= mysqli_fetch_assoc($res)):?>
<div>
<p>Название</p>
<input id='title' type='text' value='<?= $data["title"]?>'>
<p>Описание короткое</p>
<input id='short_info' type='text' value='<?= $data["short_info"]?>'>
<p>Описание длинное</p>
<input id='full_info' type='text' value='<?= $data["full_info"]?>'> 
<p>Цена</p>
<input id='price' type='number' value='<?= $data["price"]?>'> 
<button onclick="save(<?=$id?>)">Изменить</button>


</div>
 <?php
 endwhile;



echo "</div>";