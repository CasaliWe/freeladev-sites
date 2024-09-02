<?php

session_start();

require '../../../config/bootstrap.php';
use Repositories\LoginRepository;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // buscando login no banco
    $dadosLogin = LoginRepository::getLogin();

    // testando login
    if(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS) == $dadosLogin['login'] && filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS) == $dadosLogin['senha']){
        $_SESSION['login'] = true;
        header("Location: ../../../dashboard.php");
        exit;
    }else{
        $_SESSION['erro-login'] = true;
        header("Location: ../../../index.php");
        exit;
    }

}

$conn->close();

?>
