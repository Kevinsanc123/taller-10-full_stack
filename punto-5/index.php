<?php
const tick_precio = 25.000;
$membership = "";
$persinNumber = 0;

echo "tipo de memebresia: \n";
$membership = readline();

echo "numero de personas: \n";
$persinNumber = readline();


$constos = $persinNumber * $tick_prescio;

if($membership == "a" || $membership == "b"){
$discount = $constos * 0.3;
$constos = $constos - $discount;
 }else{
  echo"usted no tiene membresia \n";
 }

echo "el totoal a pagar es:" . $constos . " \n";
