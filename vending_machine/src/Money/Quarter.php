<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class Quarter extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.25, 'quarter');
  }
}
