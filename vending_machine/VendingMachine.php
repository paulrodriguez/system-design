<?php
class VendingMachine
{
  private $item_holder;

  private $rows;

  private $columns;

  public function __construct(int $rows, int $columns)
  {
    $this->rows = $rows;
    $this->columns = $columns;
  }

  public function setItemHolder(ItemHolder $item_holder)
  {
    $this->item_holder = $item_holder;
  }

  /**
   * deposit money into vending machine
   */
  public function deposit(Money $money)
  {

  }

  public function process()
  {

  }
}
