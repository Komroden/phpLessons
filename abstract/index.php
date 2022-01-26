<?php
$obj_digital = new WebGood(3);
echo $obj_digital->profitCalc();

$obj_real = new SimpleGood(3);
echo $obj_real->profitCalc();

$obj_weight = new WheightGood(3, 300);
echo $obj_weight->profitCalc();
