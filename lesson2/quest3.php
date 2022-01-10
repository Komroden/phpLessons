<?php

function sum($a,$b){
    echo $a + $b;
    return $a + $b;
}
function raz($a,$b){
    echo $a - $b;
    return $a - $b;
}
function umn($a,$b){
    echo $a * $b;
    return $a * $b;
}
function del($a,$b){
    echo $a / $b;
    return $a / $b;
}

function mathOperation($a,$b,$operation){

    switch($operation){
        case 'sum':
            sum($a,$b);
            break;
        case 'raz':
            raz($a,$b);
            break;
            
        case 'umn':
            umn($a,$b);
            break;
        case 'del':
            del($a,$b);
            break;
    }
    
}

mathOperation(1,5,'sum');
mathOperation(1,5,'raz');
mathOperation(1,5,'umn');
mathOperation(1,5,'del');
