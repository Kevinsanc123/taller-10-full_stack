<?php
$memeberShipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;

echo "tipo de membresia \n";
$memeberShipType = readline();

echo "digite numeros de las persona \n";
  $personNumber = readline();

$totaplay = $personNumber * TICKET_PRICE;
    
switch($memeberShipType) {
  case "A" :
  $totalplay = $totalplay * 0.7;
  break;
  case "B" :
  $totalplay = $totalplay * 0.75;
  break;
  case "C" :
  $totalplay = $totalplay * 0.9;
  break;
  case "D" :
  $totalplay = $totalplay * 0.95;
  break;
  default:
  echo "usted no cuneta con memenbresia";
}


echo "el tolta es: " . $totalplay;