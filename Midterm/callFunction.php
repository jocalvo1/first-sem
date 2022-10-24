<?php
class callFunction {
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
}
$Pangalan = new callFunction();
$Pangalan->setName("Joseph Emmanuel");

echo $Pangalan->getName();
