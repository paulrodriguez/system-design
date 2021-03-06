<?php
namespace VendingMachine\Money;

use VendingMachine\Money;
use VendingMachine\MoneyPhysicalType as MoneyType;

class TenDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 10, 'ten_dollars');
  }
}
