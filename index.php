<?php
$nome = 'Rodrigo Dias<br>';

echo "Olá $nome";

//Comentário de linha

#Comentário de linha
/*
Comentário
de
bloco
*/


//DOCUMENTAÇÃO DO PHP FICA EM: https://www.php.net

//for

for ($i = 0 ; $i < 10 ; $i++ ){
    echo "Rodrigo Dias<br>";
}

//while

$i=0;
while ($i < 10) {

    echo "Dias<br>";
    $i++;
}
//do while
$i = 0;
do{
    echo "Rodrigo Dias<br>";
    $i++;
}while($i < 10);

//Se 5 for maior que 10

if (5 > 10)
{
    echo "5 é maior que 10";
}
else
{
    echo "5 é menor que 10<br>";
}

//switch 

$i = 0;
switch ($i) {
    case 0:
        echo "Domingo";
        break;

case 1:
    echo "Segunda";
    break;

case 2:
    echo "Terça";
    break;

case 3:
    echo "Quarta";
    break;

case 4:
    echo "Quinta";
    break;

case 5:
    echo "Sexta";
    break;

case 6:
    echo "Sábado";
    break;
}