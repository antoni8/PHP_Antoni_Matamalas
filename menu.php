<?php

$weekdays['Breakfast']= array('Milk', 'Cofee', 'Toast', 'Oats');
$weekdays['Lunch']= array('Spanish omelett', 'spaghetti', 'Beans', 'Bacon');
$weekdays['Dinner']= array('Soap', 'Cheese', 'Fruit', 'Yogurt');

foreach ($weekdays as $value1 => $nom) {
  echo $value1. " | ";
  foreach ($nom as $value2) {
    // code...
      echo $value2. " | ";
  }
  echo "<br>";
}
?>
