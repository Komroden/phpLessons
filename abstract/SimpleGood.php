<?php


class SimpleGood extends WebGood
{
    public function getPrice() {
        return parent::PRICE * 2;
    }

    public function totalCost()
    {
        return $this->getPrice() * parent::getAmount();
    }

    public function profitCalc()
    {
        return $this->getPrice() * parent::getAmount() / 100 * parent::PROFIT;
    }
}