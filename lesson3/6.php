<?php
$city=[1=>1,
2=>2,
3=>3];
echo "<ul>";

foreach($city as $obl=>$item){
    echo "<li>$obl<ul><li>$item</li></ul></li>";
}
echo "</ul>";