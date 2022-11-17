<?php
//Chama o controle de sessão
require '../controleDeSessao/controle.php';

//Destroi a sessão
session_destroy();


    //Se não estiver, é direcionado para
    //tela de login
    header('Location: tsi-php-2022/login');
    exit();