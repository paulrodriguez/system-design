<?php
namespace VendingMachine\Api;

interface IMoney
{
  public function getPhysicalType() : string;

  public function getValue() : float;

  public function getName(): string;

  public function setPhysicalType(string $physical_type);

  public function setValue(float $value);
}
