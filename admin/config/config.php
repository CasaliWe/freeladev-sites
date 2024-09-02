<?php

require __DIR__.'/../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// **********CONEXÃO COM O DB**********
require __DIR__.'/db.php';


// **********PEGANDO A PÁG ATUAL**********
include_once  __DIR__ .'/getUrl.php';


// **********BASE URL GERAL**********
$base_url = $_ENV['BASE_URL'];