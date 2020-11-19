<?php

#Funció 1

function emailvalidation($email)
{
  return filter_var($email,FILTER_DEFAULT_EMAIL);
}
emailvalidation("asnodsn@local.local");

if (!emailvalidation("asnodsn@local.local")) {
  echo "incorrecte <br><br>";
}

#Funció 2

function passwordvalidation($password1, $password2)
{
  if (strcmp($password1, $password2)==0)
    return true;
  return false;
}

passwordvalidation("Hola", "adeu");

if (!passwordvalidation("Hola", "adeu")) {
  echo "no són iguals <br><br>";
}

?>
