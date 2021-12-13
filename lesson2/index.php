<?php
//Задание 1
$a=$_GET['a'];
$b=$_GET['b'];
if ($a>0 && $b>0){
    echo $a- $b;
} 
if ($a<0 && $b<0){
    echo $a * $b;
}else {
    echo $a +$b;
}
?>
