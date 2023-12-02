<?php

function  getNumber(){
echo "ingrese el numbero para la operacion \n";
return  readline();
}

function showmenu(){
echo "ingrese la operacion \n";
echo "1-suma \n";
echo "2-resta \n";
echo "3-multiplicacion \n";
echo "4-divicion \n";

return readline();
}

function operatie($x ,$y ,$option){
switch($option){
  case 1:
  return add($x ,$y);
  case 2:
    return sub($x ,$y);
  case 3:
return dot($x ,$y);
  case 4:
    return split($x ,y);
default:
echo "al optcio no es valido";
}


return 0;
}

function add($x ,$y){
return $x + $y;
}

function sub($x ,$y){
return $x - $y;
}

function dot($x ,$y){
return $x * $y;
}

function split($x ,$y){
return $x / $y;
}