<?php 

//Agora que solucionamos mais esse desafio, vamos aumentar a dificuldade. A ideia é, a partir de uma altura e peso definidas, calcularmos o IMC.

$peso = 60;
$altura = 1.59;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de = " . number_format($imc, 2) . PHP_EOL;
echo "Você está com ";

//if ($imc < 18.5) {
//    echo "abaixo do esperado";
//} elseif ($imc < 25) {
//    echo "dentro do esperado";
//} else {
//    echo "acima do esperado";
//};

switch (true) {
    case ($imc < 18.5): 
        echo "Baixo peso";
        break;
    case ($imc < 25): 
        echo "Peso normal";
        break;
    case ($imc < 30): 
        echo "Sobrepeso";
        break;
    case ($imc < 35): 
        echo "Obesidade grau I";
        break;
    case ($imc < 40): 
        echo "Obesidade grau II";
        break;
    default: 
        echo "Obesidade grau III";
}
