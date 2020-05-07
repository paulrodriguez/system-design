<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class TwentyDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 10, 'twenty_dollars');
  }
}
