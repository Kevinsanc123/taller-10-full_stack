<?php
$number = 0;

echo "digite el numero que va a multiplicar \n";
$number = readline();

for($i = 0; $i <= 30; $i++){
  $result = $number + $i;

  echo $number . "x" . $i . "=" . $result ."\n";
}