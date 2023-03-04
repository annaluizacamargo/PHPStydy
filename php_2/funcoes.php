<?php

//SUB-ROTINA => Não retorna
//FUNÇÃO => Retorna

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . '<br>';
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


// Quando passamos um parâmetro sem o & estamos somente passando o valor, ou seja, como uma cópia, e por isso as alterações feitas não refletem o resultado final.
// Para fazer uma alteração na referência, é necessário utilizar o &.

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
};

function exibeConta(array $conta)
{
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
};

echo "</ul>";
