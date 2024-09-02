<?php

    // Obtém a URL atual
    $urlAtual = $_SERVER['REQUEST_URI'];

    $linkAtivoIndex = null;

    // Devolve o nome da página atual
    if(strpos($urlAtual, 'index') !== false){
        $pagAtual = 'Freeladev | Login';
        $linkAtivoIndex = 'active-link';
    }else{
        $pagAtual = 'Freeladev | Admin';
        $linkAtivoIndex = 'active-link';
    }