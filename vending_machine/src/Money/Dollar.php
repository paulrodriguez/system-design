<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class Dollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 1, 'dollar');
  }
}
