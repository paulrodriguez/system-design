<?php
namespace Test;
include dirname(__DIR__).'/models/ItemHolder.php';
include dirname(__DIR__).'/models/Item.php';
use PHPUnit\Framework\TestCase;
use ItemHolderFactory;
#use ItemHolder;
#use Item;
use ItemFactory;

class ItemHolderTest extends TestCase
{

  public function testItemHolder()
  {
    $itemHolder = ItemHolderFactory::create(1,2);

    $this->assertEquals(1, $itemHolder->getCapacity());
    $this->assertEquals(2, $itemHolder->getPrice());
  }

  public function testAddItem()
  {
    $itemHolder = ItemHolderFactory::create(1,2);
    $item = ItemFactory::create("Fritos", 5.99);

    $itemHolder->addItem($item);

    $this->assertEquals(1, $itemHolder->getItemCount());
  }

  public function testAddItemPastCapacity()
  {
    $this->expectException(\Exception::class);

    $itemHolder = ItemHolderFactory::create(1,2.99);

    $itemHolder->addItem(ItemFactory::create('Doritos',5.99));
    $itemHolder->addItem(ItemFactory::create('Lays',4.99));

  }

  public function testgetItem()
  {
    $this->expectException(\Exception::class);

    $itemHolder = ItemHolderFactory::create(1,2.99);

    $itemHolder->addItem(ItemFactory::create('Doritos',5.99));

    $item = $itemHolder->getItem();
    $this->assertEquals('Doritos', $item->getName());
    $this->assertEquals(5.99, $item->getPrice());

  }


}
