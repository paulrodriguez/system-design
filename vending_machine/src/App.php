<?php
namespace VendingMachine;

use VendingMachine\Api\IMoney;
use VendingMachine\ItemHolder;
use VendingMachine\MoneyHolder\PaymentMoneyHolderFactory;
use VendingMachine\Money\MoneyFactory;

class App
{
  private $item_holder;

  private $rows;

  private $columns;

  public function __construct(int $rows, int $columns)
  {
    $this->rows = $rows;
    $this->columns = $columns;
    $this->item_holder = [];
  }

  public function addItemHolder(ItemHolder $item_holder)
  {
    $this->item_holder[] = $item_holder;
  }

  /**
   * set holder that will hold the money for purchasing
   */
  public function setPaymentMoneyHolder(IMoneyHolder $money_holder)
  {
    $this->payment_money_holder = $money_holder;
  }

  /**
   * set holder that will hold money for change after payment is processed
   */
  public function setChangeMoneyHolder(IMoneyHolder $money_holder)
  {

    $this->change_money_holder = $money_holder;
  }

  /**
   * deposit money into vending machine
   */
  public function deposit(IMoney $money)
  {
    $this->payment_money_holder->addMoney($money);
  }

  /**
   * return the total amoount of money that has been deposited so far
   */
  public function getPaymentAmount()
  {
    $this->payment_money_holder->getTotal();
  }

  public function processPayment()
  {

  }

}

class AppBuilder
{
  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function buildPaymentMoneyHolder()
  {
    $this->payment_money_holder = PaymentMoneyHolderFactory::create();
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('quarter'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('nickel'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('penny'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('quarter'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('loonie'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('dollar'));
    $this->payment_money_holder->addAllowedMoneyIn(MoneyFactory::create('five_dollar'));

    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('quarter'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('nickel'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('penny'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('quarter'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('loonie'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('dollar'));
    $this->payment_money_holder->addAllowedMoneyOut(MoneyFactory::create('five_dollar'));
  }

  public function build()
  {
    $app = new App($this->rows, $this->columns);
  }
}
