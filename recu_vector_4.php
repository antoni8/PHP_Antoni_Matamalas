<?php

$vectors['January']= array(1, 2, 3, 4, 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$vectors['Menú']= array('Beef with mushroom sauce', 'Spaghetti carbonara', 'Spanish omelette');
$vectors['Alarm times']=array('8', '12', '14', '16', '20');
$vectors['Product 123']=array('PC', 'Mouse', 'Keyboard', 'i3core', '8GB RAM', '1TB');

foreach ($vectors as $x => $x_value) {
  echo "L'array <b>" . $x . "</b> té <b>".count($x_value). "</b> valors següents:<br>";
  foreach ($x_value as $y) {
    // code...
      echo $y. ", ";
  }
  echo "<br><br>";
}
?>
