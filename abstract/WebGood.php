<?php


class WebGood extends Good
{
    const PRICE = 100;
    private $amount;

    public function __construct($amount)
    {
        self::setAmount($amount);
    }

    public function getPrice() {
        return PRICE;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount=0)
    {
        $this->amount = $amount;
    }

    public function totalCost()
    {
        return self::PRICE * $this->amount;
    }

    public function profitCalc()
    {
        return  $this->totalCost() / 100 * parent::PROFIT;
    }
}