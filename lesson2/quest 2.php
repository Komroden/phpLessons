<?php
$a=rand(0,15);

function numbers($b){
    if($b >= 15){
        return 0;
    }
    echo "$b <hr/>";
    numbers ($b+1);
    
}
numbers ($a);

?>