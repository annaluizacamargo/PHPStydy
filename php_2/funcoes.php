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
