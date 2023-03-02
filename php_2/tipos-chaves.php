<?php
//false => CONVERTE PARA 0
//true => CONVERTE PARA 1
//https://www.php.net/manual/pt_BR/types.comparisons.php

$array = [
    1 => 'a',
    '1' => 'b', //O PHP CONVERTEU PARA INTEIRO, LOGO O ÍNDICE VIROU 1 E SOBRESCREVEU O PRIMEIRO
    1.5 => 'c', //O PHP CONVERTEU PARA INTEIRO, LOGO O ÍNDICE VIROU 1 E SOBRESCREVEU OS ANTERIORES
    true => 'd', //O PHP CONVERTEU PARA INTEIRO, LOGO O ÍNDICE VIROU 1 E SOBRESCREVEU OS ANTERIORES
    'qualquer coisa' => "teste",
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
};
