<?php
namespace VendingMachine\Money;

use VendingMachine\Api\IMoney;

class MoneyFactory
{
  public static function create($type): IMoney
  {
    switch ($type) {
      case 'quarter':
        return new Quarter();
        break;
      case 'nickel':
        return new Nickel();
      case 'dime':
        return new Dime();
      case 'penny':
        return new Penny();
      case 'loonie':
        return new Loonie();
      case 'dollar':
        return new Dollar();
      case 'five_dollars':
        return new FiveDollar();
      case 'ten_dollars':
        return new TenDollar();
      case 'twenty_dollars':
        return new TwentyDollar();
      default:
        throw new \Exception('invalid money type');
        break;
    }
  }
}
