<?php

require_once '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];



/*echo "UPDATE alunos 
Set nome = $nome,
    turno = $turno,
    inicio = $inicio
Where
    id=$id";*/

$stmt = $bd -> prepare ("UPDATE alunos 
                        Set nome = :nome,
                            turno = :turno,
                            inicio = :inicio
                        Where
                            id=:id" );

$stmt ->bindParam(':id',$id);
$stmt ->bindParam(':nome',$nome);
$stmt ->bindParam(':turno',$turno);
$stmt ->bindParam(':inicio',$inicio);


$stmt ->execute();

$atualizo = false;

if ($stmt->rowCount () >0){
    $atualizo = true;

}
include 'index.php';