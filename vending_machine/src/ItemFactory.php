<?php
namespace VendingMachine;

use VendingMachine\Item;

class ItemFactory
{
  public static function create(string $name, float $price): Item
  {
    $item = new Item($name, $price);

    return $item;
  }
}
