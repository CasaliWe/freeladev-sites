<?php
namespace Repositories;

use Models\Endereco;

class EnderecoRepository {
        // pegando endereco
        public static function getEndereco() {
            return Endereco::where('idendereco', '1')->first();
        }
    
        // atualizando endereco
        public static function update($data) {
    
            $update = Endereco::where('idendereco', '1')->update([
                'endereco' => $data['endereco'],
                'bairro' => $data['bairro'],
                'cidade' => $data['cidade'],
                'estado' => $data['estado'],
                'cep' => $data['cep']
            ]);
    
            if($update){
                return true;
            } else {
                return false;
            }
    
        }
}