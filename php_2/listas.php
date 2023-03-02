<?php 

$idadeList = [21, 23, 19, 21, 30, 25];

//FORMA ARCAICA => $idadeList[count($idadeList)] = 300;
$idadeList[] = 300;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

