<?php
namespace VendingMachine\Api;

interface IMoneyHolder {
  /**
   * add Money object to list
   *
   * @param \VendingMachine\Money
   * @return \VendingMachine\IMoneyHolder
   */
  public function addMoney(\VendingMachine\Money $money);

  /**
   * get total amount of money
   *
   * @return float
   */
  public function getTotal();

  /**
   * get money list
   *
   * @return \VendingMachine\Money[]
   */
  public function getMoney();

  /**
   * get money based on their type
   *
   * @param string $type
   * @return \VendingMachine\Money[]
   */
  public function getMoneyByType($type);

  /**
   * checks whether the money can be added to list
   *
   * @param \VendingMachine\Money $money
   * @return boolean
   */
  public function canAddMoney(\VendingMachine\Money $money);

  /**
   * add money type that is allowed to be added
   *
   * @param \VendingMachine\Money $money
   * @return void
   */
  public function setAllowedMoney(\VendingMachine\Money $money);
}
