<?php
$edad = 0;
$name = "";

echo "Ingrese su nombre. \n";
  $name = readline();

echo "ingrese su edad. \n";
  $edad = readline();

if ($edad >= 18){
  echo "Bienvenido" . " " .  $name;
}else{
  echo "no puede entrar";
}