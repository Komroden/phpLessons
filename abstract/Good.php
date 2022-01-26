<?php


abstract class Good
{
    const PROFIT = 10;

    abstract public function totalCost();

    abstract public function profitCalc();
}
