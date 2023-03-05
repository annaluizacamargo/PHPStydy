<?php

$array = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Anna',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    //return $nota1['nota'] <=> $nota2['nota']; //CRESCENTE
    return $nota2['nota'] <=> $nota1['nota']; //DECRESCENTE
};

usort(array:$array, callback:'ordenaNotas');
var_dump($array);
