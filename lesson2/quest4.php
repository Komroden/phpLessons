<?php
// факториал
function numbers($val,$pow){
    if($pow === 1){
        
        return 0;
    }
    $val *= $val;
    numbers ($val,$pow-1);
    
}
numbers (2,5);
// простой пример
function number($val,$pow){
    
     return $val ** $pow;
    
}
number (2,3);
// рекурсия
function func($a, $b)
{
    if($b !== 0) {
    
        return $a * func($a, $b - 1);
    } 

    return 1;
}
func(2,3);