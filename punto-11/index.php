<?php
$suma = 0;

for ($i = 1; $i <= 100; $i++){
  echo $i . "\n";
    $suma = $suma + $i;
}

echo "la suma de los numeros es: " . $suma;