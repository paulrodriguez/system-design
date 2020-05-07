<?php
namespace VendingMachine;

class Item
{
  private $name;
  private $price;
  public function __construct(string $name, float $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}
