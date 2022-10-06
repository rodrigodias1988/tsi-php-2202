<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
// Na linha 3 estmos trazendo todo o código de
//../bancoDeDados/conecta.php para este código
//include_once(); não gera erro fatal se não existir arquivo

//Dados provenientes de formulário HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = $bd -> prepare(' INSERT INTO alunos 
                    (nome, turno, inicio)
                    VALUES 
                    (:nome, :turno, :inicio)');

/*
A função $bd->prepare() retorna
outra variável (objeto), essa outra
variável consegue juntar os dados
do usuário com a consulta SQL.
*/

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio',$inicio);

/*
A função $consulta->bindParam() substitui
os rótulos (ex.: ":nome") pelos dados
inseguros
*/

if ($consulta->execute()){

    echo "Gravou com sucesso!";
}
else{
    echo "Erro ao gravar no banco de dados.";
}
//Finalmente executamos a consulta
//no Sistema Gerenciador no Banco de Dados(SGBD)