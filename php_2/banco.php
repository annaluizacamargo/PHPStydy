<?php

// INCLUDE => feito para a inclusão de arquivos NÃO essenciais para o funcionamento do programa.
//include('funcoes.php'); OU include 'funcoes.php';

// REQUIRE => feito para a inclusão de arquivos ESSENCIAIS e OBRIGATÓRIOS para o funcionamento do programa.
require_once 'funcoes.php'; //FAZ COM QUE SEJA INCLUÍDO O ARQUIVO SOMENTE UMA VEZ PARA TER MAIS SEGURANÇA E CONTROLE

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

// FUNÇÃO PARA APAGAR / REMOVER UM ITEM (incluindo de uma lista) =
unset($contasCorrentes['123.456.789-10']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-16']);

foreach ($contasCorrentes as $cpf => $conta) {
    //PEGANDO OS VALORES DE UMA ARRAY PARA VARIÁVEIS SEPARADAS
    //Aqui estamos acessando a conta e atribuindo suas props em variáveis
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //FORMA SIMPLES DE STRING = "$cpf => $conta[titular] // $conta[saldo]"
    //FORMA COMPLEXA DE STRING = "$cpf => {$conta['titular']} // {$conta['saldo']}"
    exibeMensagem(mensagem: "$cpf => $titular // $saldo");
};