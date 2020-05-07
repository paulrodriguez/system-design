<?php
namespace VendingMachine\Api;

/**
 * interface for IMoneyHolder
 * specifies methods to be implemented for classes that hold money
 */
interface IMoneyHolder
{
  /**
   * add Money object to list
   *
   * @param \VendingMachine\Api\IMoney
   * @return \VendingMachine\IMoneyHolder
   */
  public function addMoney(IMoney $money);

  /**
   * get total amount of money
   *
   * @return float
   */
  public function getTotal();

  /**
   * get money list
   *
   * @return \VendingMachine\Api\IMoney[]
   */
  public function getMoney();

  /**
   * get money based on name
   *
   * @param string $type
   * @return []
   */
  public function getMoneyByName($name);

  /**
   * checks whether the money can be added to list
   *
   * @param VendingMachine\Api\IMoney $money
   * @return boolean
   */
  public function canAddMoney(IMoney $money) : bool;

  /**
   * add money type that is allowed to be added to this holder
   *
   * @param \VendingMachine\Money $money
   * @return void
   */
  public function addAllowedMoneyIn(IMoney $money);

  /**
   * add money type that is allowed to be extracted from this holder
   *
   * @param \VendingMachine\Money $money
   * @return void
   */
  public function addAllowedMoneyOut(IMoney $money);
}
