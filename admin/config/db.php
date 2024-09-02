<?php

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'   => 'sqlite',
    'database' => __DIR__ . '/../db/db.sqlite',
    'prefix'   => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();