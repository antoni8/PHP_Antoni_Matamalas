<?php

$days31 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$days30 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
$days29 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);

$calendar['January']= $days31;
$calendar['February']= $days29;
$calendar['March']= $days31;
$calendar['April']= $days30;
$calendar['May']= $days31;
$calendar['Juny']= $days30;
$calendar['July']= $days31;
$calendar['August']= $days31;
$calendar['September']= $days30;
$calendar['October']= $days31;
$calendar['November']= $days30;
$calendar['Desember']= $days31;

foreach ($calendar as $x => $x_value) {
  echo $x. " | ";
  foreach ($x_value as $y) {
    // code...
      echo $y. " ";
  }
  echo "<br>";
}
?>
