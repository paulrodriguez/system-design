<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class FiveDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 5, 'five_dollars');
  }
}
