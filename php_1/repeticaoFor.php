<?php 

//$contador++
//$contador + 1
//$contador += 1
//$contador = $contador  + 1

for ($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
};

//PARA PULAR UM NÚMERO = FORMA ERRADA, PORQUE QUANDO TEMOS CASOS EXCEPCIONAIS DEVEMOS RELATAR PRIMEIRO
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador != 13) {
        echo "#$contador" . PHP_EOL;        
    };
};

//PARA PULAR UM NÚMERO = FORMA CORRETA => PULANDO A ITERAÇÃO
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
       continue;
    };
    echo "#$contador" . PHP_EOL;     
};

//PARA SAIR DO LOOP =
for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
       break;
    };
    echo "#$contador" . PHP_EOL;     
};
