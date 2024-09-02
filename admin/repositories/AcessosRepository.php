<?php
namespace Repositories;

use Models\Acessos;

class AcessosRepository {
    // pegando acessos
    public static function getAcessos() {
        return Acessos::where('id', 1)->first();
    }

    // atualizando acessos
    public static function update() {
        $acesso = Acessos::where('id', 1)->first();
        $acessoNovo = $acesso->numero + 1;
        $update = Acessos::where('id', '1')->update([
            'numero' => $acessoNovo
        ]);

        if($update){
            return true;
        } else {
            return false;
        }
    }
}
