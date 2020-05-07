<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class Loonie extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 1, 'loonie');
  }
}
