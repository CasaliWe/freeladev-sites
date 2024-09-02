<?php

require '../../../../config/bootstrap.php';
use Repositories\EnderecoRepository;

$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$data = [
    'endereco' => $endereco,
    'bairro' => $bairro,
    'cidade' => $cidade,
    'estado' => $estado,
    'cep' => $cep
];

$res = EnderecoRepository::update($data);

if(!$res){
    header('Location: ../../../../dashboard.php?error=true');
    exit;
}else{
    header('Location: ../../../../dashboard.php?success=true');
    exit;
}


