<?php
/**
 * the item holder repesents a place in the vending machine matrix
 * that holds different items
 *
 * @author Paul Rodriguez
 */
class ItemHolder
{
  /** @var int */
  private $capacity;
  /** @var float */
  private $price;
  /** @var Item[] */
  private $items;

  public function __construct(int $capacity, float $price)
  {
    $this->capacity = $capacity;
    $this->price = $price;
    $this->items = [];
  }

  public function getCapacity() : int
  {
    return $this->capacity;
  }

  public function getPrice() : float
  {
    return $this->price;
  }

  public function addItem(Item $item)
  {
      $this->items[] = $item;
  }

  public function getItem() : Item
  {
    if(count($this->items) == 0) {
      throw new Exception('no items left');
    }

    return $this->items[-1];
  }

  public function popItem() : Item
  {

  }

}
