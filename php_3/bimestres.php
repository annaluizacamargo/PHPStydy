<?php

$notasBimestre1 = [
    'Vinicius' => 6, 
    'João' => 8,       
    'Anna' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,    
    'Anna' => 9,
    'Roberto' => 7,
];

//RETORNAR TODOS OS ELEMENTOS QUE OS VALORES TEM EM UMA ARRAY MAS NÃO EM OUTRA
    //var_dump(array_diff($notasBimestre1, $notasBimestre2));

//RETORNAR TODOS OS ELEMENTOS QUE AS CHAVES TEM EM UMA ARRAY MAS NÃO EM OUTRA
    //var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

    //RETORNAR TODOS OS ELEMENTOS QUE AS CHAVES E OS VALORES TEM EM UMA ARRAY MAS NÃO EM OUTRA
    var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

var_dump(array_diff($array1, $array2, $array3));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
//PARA FAZER UMA ARRAY COM AS KEYS APENAS =
$nomesAlunos = array_keys($alunosFaltantes);
//PARA FAZER UMA ARRAY COM OS VALUES APENAS =
$notasAlunos = array_values($alunosFaltantes);


//PARA COMBINAR E INVERTER A CHAVE PELO VALOR
var_dump(array_combine($notasAlunos, $nomesAlunos));
//OU
var_dump(array_flip($alunosFaltantes));
