<?php
function extractNumbers(string $string = "")
{
  preg_match_all('/\d+/', $string, $matches);
  return sortNumbers($matches[0]);
}

function sortNumbers(array $numsArray = [])
{
  // Bubble sort from Python converted to PHP
  // https://dev.to/matusstafura/bubble-sort-in-php-846
  for ($i = count($numsArray) - 1; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
      if ($numsArray[$j] > $numsArray[$j + 1]) {
        $swapped = $numsArray[$j];
        $numsArray[$j] = $numsArray[$j + 1];
        $numsArray[$j + 1] = $swapped;
      }
    }
  }
  return $numsArray;
}
