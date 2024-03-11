<?php
function extractNumbers(string $string = "")
{
  preg_match_all('/\d+/', $string, $matches);
  sort($matches[0]);
  return $matches[0];
}
