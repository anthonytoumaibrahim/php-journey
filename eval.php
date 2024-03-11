<?php
function evaluateOperation($operation)
{
  $ops = explode(" ", $operation);

  $left = (int) $ops[0];
  $operand = $ops[1];
  $right = (int) $ops[2];

  switch ($operand) {
    case "-":
      return $left - $right;
      break;
    case "+":
      return $left + $right;
      break;
    case "*":
      return $left * $right;
      break;
    case "/":
      return $left / $right;
      break;
    case "^":
      return $left ** $right;
      break;
    default:
      return "Unknown operation";
  }
}
