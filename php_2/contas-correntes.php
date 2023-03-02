<?php

//ARRAY ASSOCIATIVO

$conta1 = [
    'titular' => 'Anna',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Luiza',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Helo',
    'saldo' => 30000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

//echo $conta1['titular'];

for ($i = 0; $i < count(($contasCorrentes)); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
};
