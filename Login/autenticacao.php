<?php

require_once '../bancoDeDados/conecta.php';

$email =trim( $_POST['usuario']); // trim ayuda al usuario a tirar los espacios adicionados del comienzo y final
$senha = trim($_POST['senha']);


$stmt = $bd ->prepare ('SELECT nome , senha from usuarios where email = :email');

$stmt ->bindParam(':email',$email);
$stmt -> execute();

$usuario = $stmt ->fetch (PDO::FETCH_ASSOC);

$autentico = false;

if (isset($usuario['nome'])){// Se existir o usuário

    //Comparar a senha para ver se está correta
    if (password_verify($senha , $usuario ['senha'])){
        //Sessão inicializada

        session_start();
        $_SESSION['id'] = $email;
        //Direciona para o menu principal

        header ('Location: tsi-php-2022/menu');

    }
}

include 'index.php';