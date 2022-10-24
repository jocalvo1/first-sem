<?php
class class_C {
  public $name, $age;
  function __construct($name, $age, $address) {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }
}
class student_1 extends class_C {
  function hello() {
    echo "Hello, I am $this->name and I am $this->age years old. I live in $this->address.";
  }
}

$estudyante = new student_1("Joseph Emmanuel", 21, "Brgy. Fabrica");
echo $estudyante->hello();
