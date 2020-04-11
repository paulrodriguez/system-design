<?php
interface ICard
{
  
}
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
    parent::__construct('coin', 0.25);
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

class Card extends Money
{
  public function __construct()
  {
    parent::__construct(MoneyType::COIN, 0);
  }
}
