<?php

echo "Seja Bem-vindo " . $_POST ["nomeUsuario"] . '!<br><br>';

echo "Você tem {$_POST['idadeId']} anos, CPF: {$_POST['cpfUsuario']}. <br>";

echo "E o período escolhido foi o {$_POST['PeriodoUsuario']}.";

//$_SERVER possui muitas variáveis de ambiente que podem ser
//muito importantes para você em algum momento, ex: IP do
//requisitante

$nome = $_POST['nomeUsuario'];
$idade = $_POST[ 'idadeId'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['PeriodoUsuario'];

$arquivo = fopen('alunos.csv', 'a');//abro o arquivo para "append""

fwrite($arquivo, "$nome;$idade;$cpf;$periodo;{$_SERVER['REMOTE_ADDR']}|\r\n";
fclose($arquivo);
?>
