<?php

namespace Repositories;

require __DIR__ . '/../config/config.php';
use Repositories\ContatosRepository;
use Repositories\EnderecoRepository;
use Repositories\BannersRepository;
use Repositories\ProjetosRepository;

$contatos = ContatosRepository::getContatos();
$endereco = EnderecoRepository::getEndereco();
$banner = BannersRepository::getBanners();
$projetos = ProjetosRepository::getAll();

// juntando todos os dados
$dados = [
    'contatos' => $contatos,
    'endereco' => $endereco,
    'banner' => $banner,
    'projetos' => $projetos
];

echo json_encode($dados);
