<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model {
    protected $table = 'banners';
    protected $fillable = [
        'banner_home_desktop', 
        'banner_home_mobile'
    ];
    public $timestamps = false;
}
