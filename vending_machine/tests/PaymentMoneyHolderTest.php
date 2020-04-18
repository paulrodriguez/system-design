<?php
namespace Test;


use PHPUnit\Framework\TestCase;
use VendingMachine\PaymentMoneyHolder;
use VendingMachine\PaymentMoneyHolderFactory;
use VendingMachine\MoneyFactory;

class PaymentMoneyHolderTest extends TestCase
{
  public function testItemHolder()
  {
    $moneyHolder = PaymentMoneyHolderFactory::create();

    $this->assertEquals(0, $moneyHolder->getTotal());
  }

  public function testAddMoney()
  {
    $moneyHolder = PaymentMoneyHolderFactory::create();
    $moneyHolder->addMoney(MoneyFactory::create('quarter'));

    $this->assertEquals(0.25, $moneyHolder->getTotal());
  }
}
