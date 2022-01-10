<?php

$pravila=[
    " "=>"_"
];

function translit($str,$alphabet){
    echo strtr($str,$alphabet);
        
}
translit('привет Билл',$pravila);