<?php
namespace VendingMachine\MoneyHolder;

use VendingMachine\MoneyHolder\PaymentMoneyHolder;
/**
 * factory method class to create money holder object
 */
class PaymentMoneyHolderFactory
{
  /**
   * create a money holder object
   *
   * @return \VendingMachine\PaymentMoneyHolder
   */
  public static function create() : PaymentMoneyHolder
  {
    $moneyHolder = new PaymentMoneyHolder();

    return $moneyHolder;
  }
}
