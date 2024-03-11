<?php
function validateEmail(string $email)
{
  $regex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
  if (preg_match($regex, $email)) {
    return "Email is valid!";
  }
  return "Email is not valid.";
}

function validatePassword(string $password)
{
  $regex = '/\!|\$|#|@|\^|\&|\%|\d/';
  if (preg_match($regex, $password) && strlen($password) >= 8) {
    return "Your password is secure!";
  }
  return "Your password is not secure. It must contain:\nAt least 8 characters, and at least one special character or number.";
}
