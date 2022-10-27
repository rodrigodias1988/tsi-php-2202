<?php
//BUSCANDO O COD DA CONEXAO COM O BANCO DE DADOS

require_once '../BancoDeDados/conecta.php';
//include(); incluir 
//include_once(); nao gera erro fatal se nao existir

// DADOS DO HTML

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = $bd->prepare('INSERT INTO alunos
                        (nome, turno, inicio)
                        VALUES 
                        (:nome ,:turno, :inicio)');
/*
o objstmt esta retornando um array que contem um
 pre consulta no banco de dados (sem os dados do usuario)
 ----
 A funcao $bd->prepare() retorna
 outra variavel (objeto), essa outra 
 variavel consegue juntar os dados 
 do usuario com consulta SQL
*/

$consulta->bindParam('nome', $nome);
$consulta->bindParam('turno', $turno);
$consulta->bindParam('inicio', $inicio);

/*

'procurar', $substituirPor

A funcao $consulta->bindParam() substitui
os rotulos (ex.: ":nome") pelos dados inseguros
 */

 if( $consulta->execute()){

    echo "Gravado com sucesso!";

 }else{

    echo "ERRO ao gravar no banco de dados";

 }

 //Finalmente executamos a consulta no BD

 include 'index.php';