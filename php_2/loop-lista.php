<?php 

$idadeList = [21, 23, 19, 21, 30, 25, 'oioioi'];

for ($i = 0; $i < sizeof($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
