<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model {
    protected $table = 'contatos';
    protected $fillable = [
        'instagram',
        '_instagram',
        'facebook',
        '_facebook',
        'linkedin',
        '_linkedin',
        'email_site',
        'email_contato_site',
        'wpp_principal'
    ];
    public $timestamps = false;
}