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

  /**
   * get total capacity item holder
   *
   * @return int
   */
  public function getCapacity() : int
  {
    return $this->capacity;
  }

  /**
   * get price for this holder
   *
   * @return float
   */
  public function getPrice() : float
  {
    return $this->price;
  }

  /**
   * modify capacity
   *
   * @param int $capacity
   * @return void
   */
  public function setCapacity(int $capacity): void
  {
    $this->capacity = $capacity;
  }

  /**
   * modify price
   *
   * @param float $price
   * @return void
   */
  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  /**
   * add item that can be purchased
   *
   * @param Item $item
   * @return void
   */
  public function addItem(Item $item)
  {
    if(count($this->items) == $this->capacity) {
      throw new \Exception('reached maximum capacity');
    }
      $this->items[] = $item;
  }

  public function getItem() : Item
  {
    if(count($this->items) == 0) {
      throw new \Exception('no items left');
    }

    return $this->items[-1];
  }

  public function popItem() : Item
  {
    $item = array_pop($this->items);

    return $item;
  }

  public function getItemCount(): int
  {
    return count($this->items);
  }

}

class ItemHolderFactory
{
  public static function create(int $capacity, float $price) : ItemHolder
  {
    $itemHolder = new ItemHolder($capacity, $price);

    return $itemHolder;
  }
}
