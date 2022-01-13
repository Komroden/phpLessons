<?php
$action=strip_tags($_POST['action']);
$a=strip_tags($_POST['a']);
$b=strip_tags($_POST['b']);


?>
<form action='calcButton.php' method='post'>
                <input type='text' name='a'/>
                <!-- <select name='action'>
                    <option value='sum'>+</option>
                    <option value='raz'>-</option>
                    <option value='umn'>*</option>
                    <option value='del'>/</option>
                </select> -->
                <input type='text' name='b'/>
                <input type='submit' name='action' value ='sum'>
                <input type='submit' name='action' value ='raz'>
                <input type='submit' name='action' value ='umn'>
                <input type='submit' name='action' value ='del'>
 </form>


 <?php
 if($action&&$b==0){
    echo "На ноль делить нельзя!";
 }
 if($a&&$b&&$action){
     if($action===sum){
         echo $a+$b;
         
     }
     if($action===raz){
        echo $a-$b;
    }
    if($action===umn){
        echo $a*$b;
    }
    if($action===del){
        if($b!==0){
        echo $a+$b;}
        
    }

 }