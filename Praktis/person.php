<?php

class Person {
  public $varName = "";

  function __construct(public string $name) {
    $this->varName = "wiw";
  }
}

class Employee extends Person {
  public function getNetIncome() {
    $this->varName;
  }
}

$people = array(
  new Person("Mary"), new Person("Smith"), new Person("Will"), new Person("Mary"),
);

foreach ($people as $index => $person) {
}
