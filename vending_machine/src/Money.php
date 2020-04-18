<?php
namespace VendingMachine;

abstract class Money
{
  private $type;
  private $value;
  public function __construct(string $type, float $value)
  {
    $this->type = $type;
    $this->value = $value;
  }

  public function getType() : string
  {
    return $this->type;
  }

  public function getValue() : float
  {
    return $this->value;
  }

  public function setType(string $type)
  {
    $this->type = $type;
  }

  public function setValue(float $value)
  {
    $this->value = $value;
  }
}

class Quarter extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.25);
  }
}

class Dime extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.1);
  }
}

class Nickel extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.05);
  }
}

class Penny extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0.01);
  }
}

class Loonie extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 1);
  }
}

class Dollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 1);
  }
}

class FiveDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 5);
  }
}

class TenDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 10);
  }
}

class TwentyDollar extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::BILL, 10);
  }
}

class MoneyFactory
{
  public static function create($type): Money
  {
    switch ($type) {
      case 'quarter':
        return new Quarter();
        break;
      case 'nickel':
        return new Nickel();
      case 'dime':
        return new Dime();
      case 'penny':
        return new Penny();
      case 'loonie':
        return new Loonie();
      case 'dollar':
        return new Dollar();
      case 'five_dollar':
        return new FiveDollar();
      case 'ten_dollar':
        return new TenDollar();
      case 'twenty_dolar':
        return new TwentyDollar();
      default:
        throw new \Exception('invalid money type');
        break;
    }
  }
}
