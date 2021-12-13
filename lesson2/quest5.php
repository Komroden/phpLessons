<?php
$hour= date("G");
$minute = date("i");
$hourVariants=["Час","Часа","Часов"];
$minuteVariants=["Минута","Минуты","Минут"];
function dateText($val,$options){
    $num = $val % 60;
	if ($num > 19) {
		$num = $num % 10; 
	}
    $out=$val." ";
    switch ($num) {
		case 1:  $out .= $options[0]; break;
		case 2: 
		case 3: 
		case 4:  $out .= $options[1]; break;
		default: $out .= $options[2]; break;
	}
    return $out;


}

echo  dateText($hour,$hourVariants);
echo " ";
echo  dateText($minute,$minuteVariants);
