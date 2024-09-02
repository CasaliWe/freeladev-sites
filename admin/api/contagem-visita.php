<?php

namespace Repositories;

require __DIR__ . '/../config/config.php';
use Repositories\AcessosRepository;

$res = AcessosRepository::update();
if($res){
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}