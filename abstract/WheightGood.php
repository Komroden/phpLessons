<?php


class WheightGood extends Good
{
    private $price;
    private $wieght;

    public function __construct($price, $wieght)
    {
        self::setPrice($price);
        self::setWieght($wieght);
    }

    public function setPrice($price=0)
    {
        $this->price = $price;
    }

    public function setWieght($wieght=0)
    {
        $this->wieght = $wieght;
    }

    public function totalCost()
    {
        return $this->price * $this->wieght;
    }

    public function profitCalc()
    {
        return $this->price * $this->wieght / 100 * parent::PROFIT;
    }
}