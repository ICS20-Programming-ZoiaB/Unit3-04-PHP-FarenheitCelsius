<?php

//Get user input
  $celsius = floatval($_POST['temp']);

//Calculate and display
  $fahrenheit = 9 / 5 * $celsius + 32;
  echo "The temperature in Celsius is " . (int)$fahrenheit . " degrees Celsius.";
?>