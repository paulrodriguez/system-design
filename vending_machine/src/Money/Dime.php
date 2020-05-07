<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class Dime extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.1, 'dime');
  }
}
