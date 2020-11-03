<?php
/*$calendari1= array("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Septembre", "Octubre", "Novembre", "Desembre");*/
$days31 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$days30 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
$days29 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);
$calendari= array(
  "Gener" => $days31,
 "Febrer" => $days29,
 "Març" => $days31,
 "Abril" => $days30,
 "Maig" => $days31,
 "Juny" => $days30,
 "Juliol" => $days31,
 "Agost" => $days31,
 "Septembre" => $days30,
 "Octubre" => $days31,
 "Novembre" => $days30,
 "Desembre" => $days31
);

 foreach($calendari as $x => $x_value) {
  echo "$x | ";
    foreach($x_value as $y => $y_value)
    {
      echo "$y_value ";
    }
    echo "<br>";
 }
?>
