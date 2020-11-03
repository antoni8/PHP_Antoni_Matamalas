<?php

$vectors2['components']= array(1, 2, 3, 4, 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$vectorsr['Restaurant1']= 'Beef with mushroom sauce';
$vectorsr['Restaurant2']= 'spaghetti carbonara';
$vectorsr['Restaurant3']= 'Spanish omelett';

echo "<h4>Vectors sense array</h4>";
echo "There are: " .count($vectorsr). "<br>";
foreach ($vectorsr as $value1) {
  // code...
  echo "<br>El  <b>$value1</b>";
}

echo "<h4>Vectors amb array</h4>";
foreach ($vectors2 as $values) {
  // code...
  echo "<br>There are: " .count($values). "<br><br>";
  foreach ($values as $value3) {
    // code...
    echo "El  <b>$value3</b><br>";
  }
}
?>
