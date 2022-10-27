<?php 

//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Apenas para ficar mais fácil de trabalhar
//com o dado enviado pelo usuário
$id = $_POST['id'] ?? 0;
// ?? quando não existe $_POST['id'] atribui
// 0 para $id

$stmt = $bd->prepare(' SELECT
                            id, nome, turno, inicio
                            FROM
                            alunos
                            WHERE
                            id = :id');
$stmt->bindParam(':id',$id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

//fazer em casa

//Mostrar um formulário HTML para o usuário
//com os dados do aluno selecionado para
//ser editado

//Ao clicar "gravar" no formulário fazer
//o update no banco e voltar para a
// index com uma mensagem de erro ou
//sucesso


var_dump($aluno);