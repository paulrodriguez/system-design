<?php
namespace VendingMachine;

use VendingMachine\Api\IMoney;

abstract class Money implements IMoney
{
  private $physical_type;
  private $value;
  private $name;

  public function __construct(string $physical_type, float $value, string $name)
  {
    $this->physical_type = $physical_type;
    $this->value = $value;
    $this->name = $name;
  }

  public function getPhysicalType() : string
  {
    return $this->physical_type;
  }

  public function getValue() : float
  {
    return $this->value;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setPhysicalType(string $physical_type)
  {
    $this->physical_type = $physical_type;
  }

  public function setValue(float $value)
  {
    $this->value = $value;
  }
}
