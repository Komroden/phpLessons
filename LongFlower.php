<?php
require "index.php";
class LongFlower extends Flower{
    private $height;

    public function __construct($title,$price,$color,$height){
        parent::__construct($title,$price,$color);
        $this->height=$height;
    }
    public function getInfo(){
        echo parent::getInfo(). "<br> высота {$this->height}";
    }

}

$longRose= new LongFlower("Роза",1000,"Желтая",500);
$longRose->getInfo();