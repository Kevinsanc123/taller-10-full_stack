<?php

include "./operation.php";

$numberOne = 0;
$numberTwo = 0;
$option = "";


$numberOne = getNumber();
$numberTwo = getNumber();

$option = showmenu();

$result = operatie($numberOne ,$numberTwo ,$option);

echo "el resultado es:" .  $result;