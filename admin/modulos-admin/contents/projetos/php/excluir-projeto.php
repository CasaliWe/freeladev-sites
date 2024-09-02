<?php

require '../../../../config/bootstrap.php';
use Repositories\ProjetosRepository;

$id = filter_input(INPUT_POST, 'id-projeto', FILTER_SANITIZE_SPECIAL_CHARS);


$res = ProjetosRepository::delete($id);

if ($res) {
    header('Location: ../../../../projetos.php?delete=true');
} else {
    header('Location: ../../../../projetos.php?error=true');
}