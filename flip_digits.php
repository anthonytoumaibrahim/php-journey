<?php
function flipDigits(int $number = 0)
{
  $number = (string) $number;
  $result = "";
  $len = strlen($number);

  // Loop through numbers
  for ($i = $len - 1; $i >= 0; $i--) {
    $result .= $number[$i];
  }

  return (int) $result;
}
