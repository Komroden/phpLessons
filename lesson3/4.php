<?php

$alphabet=[
    "а"=>"a",
    "б"=>"b",
    "в"=>"v",
    "г"=>"g",
    "д"=>"d",
    "е"=>"e",
    "ё"=>"ee",
    "ж"=>"j",
    "з"=>"z",
    "и"=>"i",
    "к"=>"k",
    "л"=>"l",
    "м"=>"m",
    "н"=>"n",
    "о"=>"o",
    "п"=>"p",
    "р"=>"er",
    "с"=>"ec",
    "т"=>"t",
    "у"=>"y",
    "ф"=>"f",
    "х"=>"x",
    "ц"=>"ce",
    "ч"=>"che",
    "ш"=>"se",
    "щ"=>"ses",
    "ъ"=>"tznak",
    "ы"=>"we",
    "ь"=>"mznak",
    "э"=>"ey",
    "ю"=>"you",
    "я"=>"ya",

];

function translit($str,$alphabet){
    echo strtr($str,$alphabet);
        
}
translit('привет',$alphabet);