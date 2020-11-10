<?php

$menu= array(
  array('Breakfast', 'Milk', 'Coffee', 'Toast', 'Oats'),
  array('Lunch', 'Spanish omelett', 'Spaghetti', 'Beans', 'Bacon'),
  array('Dinner', 'Soap', 'Cheese', 'Fruit', 'Yogurt')
);

foreach ($menu as $key) {
  // code...
  foreach ($key as $hola) {
    // code...
    echo $hola. " | ";
  }
  echo "<br>";
}
?>
