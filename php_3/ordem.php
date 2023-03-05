<?php

$notas = [
    10,
    8,
    9,
    7
];

//SORT = Ordena números de forma crescente e strings de forma alfabética

$notasOrdenadas = $notas;
sort(array: $notasOrdenadas);

echo 'Desordenadas: ';
var_dump($notas); //para exibir informações sobre a variável

echo 'Ordenadas: ';
var_dump($notasOrdenadas);
