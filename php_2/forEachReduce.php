<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Anna',
        'saldo' => 1000
    ],

    '123.456.789-13' => [
        'titular' => 'Luiza',
        'saldo' => 10000
    ],

    '123.456.789-16' => [
        'titular' => 'Helo',
        'saldo' => 30000
    ],
];

//PARA ADICIONAR UM ITEM NA ARRAY =
$contasCorrentes['123.456.789-19'] = [
    'titular' => 'Helena',
    'saldo' => 600
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf => $conta[titular]" . PHP_EOL;
};
