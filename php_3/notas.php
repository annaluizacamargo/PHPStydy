<?php

$notas = [
    'Vinicius' => null,    
    'Anna' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
];

//PARA ORDENAR PELOS VALORES =
    //usort
    //asort(array:$notas); //MANTEM AS CHAVES QUANDO É EXECUTADO O SORT
    //arsort(array:$notas); //MANTEM AS CHAVES QUANDO É EXECUTADO O SORT
    //rsort(array:$notas); //ORDEM INVERSA DO SORT, entretanto redefine os índices de norma numérica (de zero a x), fazendo a gente perder os índices atribuidos


//PARA ORDENAR PELAS CHAVES =
    //uksort;
    //ksort(array:$notas);
    krsort(array:$notas);//ORDEM INVERSA DO SORT

var_dump($notas);


//PARA VERIFICAR SE É UMA ARRAY =
/*if(gettype($notas) === 'array') {
    echo 'Sim, é uma array';
}*/
// OU
if(is_array($notas)) {
    echo 'Sim, é uma array' . PHP_EOL;
};


var_dump(array_is_list($notas)); //recebe um array por parâmetro e retorna verdadeiro se esse array for em numérico, ou seja, todas as suas chaves são números, ele começa com o zero e a partir do zero são todas crescentes.


//PARA VERIFICAR SE UMA CHAVE EXISTE EM UMA ARRAY DA FORMA ANTIGA =
//foreach ($notas as $aluno => $nota) {
//    if($aluno === 'Vinicius') {
//        return true;
//    };
//};

//FORMA IDEAL (NÃO VERIFICA SE É NULO) =
echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists(key:'Vinicius', array:$notas));

//FORMA IDEAL (VERIFICA SE É NULO) =
echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Vinicius']));

echo 'Alguem tirou 10? ' . PHP_EOL;
var_dump(in_array(10, $notas, true)); //o strict que é o terceiro parâmetro é para definir se a comparação será mais estrita, ou seja, ao invés de ser '==' se torna '==='

echo 'Quem tirou 10? ' . PHP_EOL;
var_dump(array_search(10, $notas));  //também possui o strict

// array_key_exists()   => verifica se a chave existe
// isset()              => verifica se a chave existe & não é nula
// in_array()           => verifica se o valor existe
// array_search()       => traz a chave do array solicitado, caso não encontre ele retorna 'false'


