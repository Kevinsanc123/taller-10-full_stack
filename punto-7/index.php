<?php
$esult = 0;
$option = 0;
$firstNumber = 0;
$secondNumber = 0; 

echo"ingresa el primer numero \n";
$firstnumber = readline();

echo"ingresa el segundo numero \n";
$secondNumber = readline();

echo"digite la operacion que quiera usar";
  echo"1-suma";
  echo"2-suma";
  echo"3-suma";
  echo"4-suma";
  $option = realine();


swich($option){
  case 1:
  $result = $firstNumber + $SecondNumber
  break;
  case 2:
  $result = $firstNumber - $SecondNumber
  break;
  case 3:
  $result = $firstNumber * $SecondNumber
  break;
  case 4:
  $result = $firstNumber / $SecondNumber
  break;
  default
   echo "digito de una de las optiones est mal";
  }


echo "su resultado es \n" . $result;