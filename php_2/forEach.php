<?php

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

$contasCorrentes = [
    12345678910 => $conta1,
    12345678913 => $conta2,
    12345678916 => $conta3
];

//foreach ($contasCorrentes as $conta) {
//    echo $conta['titular'] . PHP_EOL;
//};

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf => $conta[titular]" . PHP_EOL;
};
