<?php
$nom="Antoni Matamalas Riera";

function fullNameSplit($nom)
{
  return explode(" ", $nom);
}

$hola=fullNameSplit($nom);
foreach ($hola as $key) {
  // code...
  echo $key. "<br>";
}

function pwdhash($nom1)
{
  return password_hash($nom1, PASSWORD_DEFAULT);
}

echo pwdhash("hola");
?>
