<?php


$databaseFile = __DIR__.'/../../db/db.sqlite';
$backupDir = __DIR__.'/../backups/';
$backupFile = $backupDir . 'backup_' . date('d-m-Y') . '.sqlite';

if (copy($databaseFile, $backupFile)) {
    echo "Backup criado com sucesso: $backupFile\n";
} else {
    echo "Falha ao criar o backup.\n";
}

