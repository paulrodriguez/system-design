<?php
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

class ItemFactory
{
  public static function create(string $name, float $price): Item
  {
    $item = new Item($name, $price);

    return $item;
  }
}
