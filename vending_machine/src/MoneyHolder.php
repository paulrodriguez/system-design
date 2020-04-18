<?php
namespace VendingMachine;

use VendingMachine\Api\IMoneyHolder;

/**
 * allows to hold money type objects and keep track of their total value
 */
class PaymentMoneyHolder implements IMoneyHolder
{
  public function __construct()
  {
    $this->total = 0.00;
    $this->money = [];
    $this->allowed_money = [];
  }

  public function addMoney(Money $money)
  {
    $this->money[] = $money;

    $this->total += $money->getValue();
  }

  public function getTotal()
  {
    return $this->total;
  }

  public function getMoney()
  {

  }
  public function getMoneyByType($type)
  {

  }
  public function canAddMoney(Money $money)
  {

  }

  public function setAllowedMoney(Money $money)
  {

  }

}

/**
 * factory method class to create money holder object
 */
class PaymentMoneyHolderFactory
{
  /**
   * create a money holder object
   *
   * @return \VendingMachine\MoneyHolder
   */
  public static function create() : PaymentMoneyHolder
  {
    $moneyHolder = new PaymentMoneyHolder();

    return $moneyHolder;
  }
}
