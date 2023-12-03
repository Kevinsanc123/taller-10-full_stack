<?php
$number = 0;
$i = 0;

echo "digita el numero \n";
$number = readline();

while($i <= 30) { 
  $result = $number * $i;
  echo $number . "X" . $i . " = " . $result . "\n";
  $i = $i + 1;
 }
