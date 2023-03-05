<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
};

echo "Total: " . count($array) . PHP_EOL; //SABER O TAMANHO DA ARRAY

var_dump(array_is_list($array)); //recebe um array por parâmetro e retorna verdadeiro se esse array for em numérico, ou seja, todas as suas chaves são números, ele começa com o zero e a partir do zero são todas crescentes.
//Para retornar true não pode pular números da key, precisa iniciar em zero, ser numérico e crescente
