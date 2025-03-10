<?php

namespace App\Validation;

class ValidateProduct {

  public function isEven($num) :bool{
    return $num % 2 == 0;
  }
}