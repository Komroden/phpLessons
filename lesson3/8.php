<?php
$city=[
    "Московская Область"=>["Москва","Зеленоград","Клин"],
    "Ленинградская Область"=>["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
    "Рязанская Область"=>["Рязань1","Рязань2","Рязань3"]
];

foreach($city as $obl => $items){
    $filtredCity=[];
    foreach($items as $item){
         if (mb_substr($item,0,1)==="К")array_push($filtredCity,$item);
    }
    echo "$obl:<br>".implode(",",$filtredCity)."</br>";
}