<?php
namespace VendingMachine;

use VendingMachine\ItemHolder;

class ItemHolderFactory
{
  public static function create(int $capacity, float $price) : ItemHolder
  {
    $itemHolder = new ItemHolder($capacity, $price);

    return $itemHolder;
  }
}
