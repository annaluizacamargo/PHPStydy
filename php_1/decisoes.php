<?php

$idade = 10;
$nome = 'Luiza';
$estaAcompanhado = true;

//echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

// $idade == 18 || $idade > 18
// $idade == 18 or $idade > 18
//$idade == 18 >= $idade > 18

if ($idade >= 18 /*&& $nome == 'Anna'*/) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else if ($idade >= 16 && $estaAcompanhado) {
    echo "Você tem $idade anos, está acompanhado, logo pode entrar";
} else if ($idade >= 16 && !$estaAcompanhado) {
    echo "Você tem $idade anos, não está acompanhado, logo não pode entrar  :(";
} else {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode não pode entrar  :(";
};


echo PHP_EOL;
echo "Adeus!";
