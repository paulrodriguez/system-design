<?php
require_once __DIR__.'/vendor/autoload.php';

use VendingMachine\ItemFactory;

$item = ItemFactory::create('test',44);
print_r($item->getPrice());
