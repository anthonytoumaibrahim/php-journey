<?php
function validate(string $email, string $password)
{
  $emailValidMessage = "Email is not valid.";
  $passwordValidMessage = "Your password is not secure. It must contain:\nAt least 8 characters, and at least one special character or number.";
  if (preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $email)) {
    $emailValidMessage = "Email is valid!";
  }
  if (preg_match('/\!|\$|#|@|\^|\&|\%|\d/', $password) && strlen($password) >= 8) {
    $passwordValidMessage = "Your password is secure!";
  }

  return "$emailValidMessage\n$passwordValidMessage";
}
