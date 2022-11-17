<?php
//Controle de acesso/sessão
require_once '../controleDeSessao/controle.php';
//buscamos o codigo que conecta no SGBD
require_once'../bancoDeDados/conecta.php';

//apenas para ficar mais facil de trabalhar 
//com dado enviado pelo usuário
$id = $_GET['id'];

//evito que seja recebido $id  e qualquer coisa que seja diferente de numeros(digitos)

$id = preg_replace('/\D/', '', $id);

if($bd->exec("DELETE FROM alunos WHERE id = $id")){

    $apagado=true;

}else{
    $apagado = false;

};

include 'index.php';