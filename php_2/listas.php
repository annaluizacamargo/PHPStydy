<?php 

$idadeList = [21, 23, 19, 21, 30, 25];

list($idadeAnna, ,$idadeLuiza, $idadeHelo) = $idadeList;
unset($idadeList[2]);

//FORMA ARCAICA => $idadeList[count($idadeList)] = 300;
$idadeList[] = 300;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

