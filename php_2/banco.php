<?php

//SUB-ROTINA => Não retorna
//FUNÇÃO => Retorna

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar <= $conta['saldo']) {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem(mensagem: "Seu saque de R$$valorASacar ocorreu com sucesso!");
    } else {
        exibeMensagem(mensagem: "Sinto muito mas não foi possível sacar");
    }
    return $conta;
};

function depositar(array $conta, float $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem(mensagem: "Seu depósito de R$$valorADepositar ocorreu com sucesso!");
        return $conta;
    } else {
        exibeMensagem(mensagem: "Depósitos precisam ser positivos");
    };
};


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

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    valorASacar: 1100,
);

$contasCorrentes['123.456.789-16'] = depositar(
    $contasCorrentes['123.456.789-16'],
    valorADepositar: 300,
);

foreach ($contasCorrentes as $cpf => $conta) {
    //FORMA SIMPLES DE STRING = "$cpf => $conta[titular] // $conta[saldo]"
    //FORMA COMPLEXA DE STRING = "$cpf => {$conta['titular']} // {$conta['saldo']}"
    exibeMensagem(mensagem: "$cpf => {$conta['titular']} // {$conta['saldo']}");
};