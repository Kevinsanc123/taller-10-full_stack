<?php

include "./password.php";

$user = "";
$password = 0;


echo "digite su usario \n";
$user = readline();

echo "digite su contraseña \n";
$password = readline(); 

if(hasSecurityLong($password)){
  echo "su contraseña es segura  \n";
}else{
  echo "su contrasena no es segura";
}
