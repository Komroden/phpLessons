<?php
Class Flower{
    public $title;
    public $color;
    public $price;
    

    function __construct($title,$price,$color){
        $this->title=$title;
        $this->price=$price;
        $this->color=$color;
    }
    function getInfo(){
        return "Цветок {$this->title} цвет {$this->color} цена {$this->price}";
    }
}

$rose= new Flower('Роза',500,'Красный');

$rose->getInfo();