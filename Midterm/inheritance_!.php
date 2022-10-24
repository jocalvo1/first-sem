<?php
class vegetable {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }
}

class eggplant extends vegetable {
  function tip_1() {
    echo "To have a healthy lifestyle, eat some $this->name";
  }
}
$eggplant = new eggplant("eggplant");
echo $eggplant->tip_1();
