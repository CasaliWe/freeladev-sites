<?php

    session_start();

    // verificação auth
    if(!isset($_SESSION['login'])){
        header("Location: index.php");
        exit;
    }

?>