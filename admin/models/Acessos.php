<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Acessos extends Model {
    protected $table = 'acessos';
    protected $fillable = [
        'numero'
    ];
    public $timestamps = false;
}