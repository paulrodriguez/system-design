<?php
namespace VendingMachine\MoneyHolder;

use VendingMachine\Api\IMoneyHolder;
use VendingMachine\Api\IMoney;

/**
 * allows to hold money type objects and keep track of their total value
 */
class PaymentMoneyHolder implements IMoneyHolder
{
  private $total;
  private $money;
  private $allowed_money_in;
  private $allowed_money_out;

  public function __construct()
  {
    $this->total = 0.00;
    $this->money = [];
    $this->allowed_money_in = [];
    $this->allowed_money_out = [];
  }

  public function addMoney(IMoney $money)
  {
    if(!$this->canAddMoney($money)) {
        throw new \Exception('This type of money is not permitted');
    }

    if(array_key_exists($money->getName(), $this->money)) {
      $this->money[$money->getName()]['count'] += 1;
    } else {
      $this->money[$money->getName()] = ['count'=>1,'type'=>$money];
    }

    $this->total += $money->getValue();
  }

  public function getTotal()
  {
    return $this->total;
  }

  /**
   * gets the money being holded.
   *
   * @return []
   */
  public function getMoney()
  {
    return $this->money;
  }

  /**
   * gets money based on name
   */
  public function getMoneyByName($name)
  {

  }
  public function canAddMoney(IMoney $money) : bool
  {
    foreach($this->allowed_money_in as $allowed_money)
    {
      if($money->getName() == $allowed_money->getName()) {
        return true;
      }
    }

    return false;
  }

  public function addAllowedMoneyIn(IMoney $money)
  {
    foreach($this->allowed_money_in as $allowed_money)
    {
      if($money->getName() == $allowed_money->getName()) {
        return;
      }
    }

    $this->allowed_money_in[] = $money;
  }

  public function addAllowedMoneyOut(IMoney $money)
  {
    foreach($this->allowed_money_out as $allowed_money)
    {
      if($money->getName() == $allowed_money->getName()) {
        return;
      }
    }

    $this->allowed_money_out[] = $money;
  }

}
