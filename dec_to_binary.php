<?php
function decimalToBinary(int $number = 0)
{
  // https://byjus.com/maths/decimal-to-binary/
  $new = $number;
  $remainders = [];

  while ($new != 0) {
    $remainder = $new % 2;
    array_push($remainders, $remainder);
    $new = floor($new / 2);
  }

  $remainders = array_reverse($remainders);

  return implode('', $remainders);
}
