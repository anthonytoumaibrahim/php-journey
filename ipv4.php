<?php
function validateIPv4(string $ip = ""): bool
{
  if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    return true;
  }
  return false;
}
