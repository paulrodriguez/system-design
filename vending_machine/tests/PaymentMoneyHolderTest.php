<?php
namespace Test;


use PHPUnit\Framework\TestCase;
//use VendingMachine\PaymentMoneyHolder;
use VendingMachine\MoneyHolder\PaymentMoneyHolderFactory;
use VendingMachine\Money\MoneyFactory;

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
    $moneyHolder->addAllowedMoneyIn(MoneyFactory::create('quarter'));
    $moneyHolder->addMoney(MoneyFactory::create('quarter'));

    $this->assertEquals(0.25, $moneyHolder->getTotal());
  }

  public function testAddMoneyInvalid()
  {
    $this->expectException(\Exception::class);

    $moneyHolder = PaymentMoneyHolderFactory::create();
    $moneyHolder->addMoney(MoneyFactory::create('loonie'));
  }
}
