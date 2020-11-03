<?php

$vectors2['January']= array(1, 2, 3, 4, 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

echo "Stringkey= January<br><br>";
foreach ($vectors2 as $values) {
  // code...
  echo "Number of elements: " .count($values). "<br><br>";
  foreach ($values as $value3) {
    // code...
    echo $value3. "<br>";
  }
}
?>
