<?php

//A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9.

$numero = 3;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado" . PHP_EOL;
};

