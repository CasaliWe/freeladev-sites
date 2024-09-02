<?php
namespace Repositories;

use Models\Banners;

class BannersRepository {
    // pegando todos os banners
    public static function getAll() {
        return Banners::all();
    }

    // pegando os banners
    public static function getBanners() {
        return Banners::where('idbanners', '1')->first();
    }

    // atualizando banner
    public static function update($refDesk, $refMob, $nomeDesk, $nomeMob) {
        $update = Banners::where('idbanners', '1')->update([
            $refDesk => $nomeDesk,
            $refMob => $nomeMob
        ]);

        if($update){
            return true;
        } else {
            return false;
        }
    }
}
