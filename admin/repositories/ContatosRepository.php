<?php
namespace Repositories;

use Models\Contatos;

class ContatosRepository {
    // pegando contatos
    public static function getContatos() {
        return Contatos::where('idcontatos', '1')->first();
    }

    // atualizando contatos
    public static function update($data) {

        $update = Contatos::where('idcontatos', '1')->update([
            'instagram' => $data['instagram'],
            '_instagram' => $data['@_instagram'],
            'facebook' => $data['facebook'],
            '_facebook' => $data['@_facebook'],
            'linkedin' => $data['linkedin'],
            '_linkedin' => $data['@_linkedin'],
            'email_site' => $data['email-site'],
            'email_contato_site' => $data['email-site-admin'],
            'wpp_principal' => $data['wpp-principal']
        ]);

        if($update){
            return true;
        } else {
            return false;
        }

    }
}