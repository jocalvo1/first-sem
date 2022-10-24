<?php

class Calculator {
  function __construct(public int $total = 0) {
  }

  function add(int $value) {
    $this->total += $value;
    return $this;
  }

  function subtract(int $value) {
    $this->total -= $value;
    return $this;
  }

  function multiply(int $value) {
    $this->total *= $value;
    return $this;
  }

  function divide(int $value) {
    $this->total /= $value;
    return $this;
  }
}
