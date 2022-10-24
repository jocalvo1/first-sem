<?php
class employee {
  public $Name;
  public $Age;

  function __construct($Name) {
    $this->name = $Name;
  }
  function getName() {
    return $this->name;
  }
}
$employee = new employee("Joseph Emmanuel");
echo $employee->getname();
