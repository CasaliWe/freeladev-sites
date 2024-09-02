<?php
namespace Repositories;

use Models\Projetos;

class ProjetosRepository {

    // buscando todos os projetos
    public static function getAll(){
        return Projetos::all();
    }

    // criando um novo projeto
    public static function create($titulo, $descri, $link, $imagem){

        $dados = [
            'titulo' => $titulo,
            'descricao' => $descri,
            'link' => $link,
            'imagem' => $imagem
        ];
        $res = Projetos::create($dados);

        if($res){
            return true;
        } else {
            return false;
        }

    }

    // deletando um projeto
    public static function delete($id){
        $projeto = Projetos::find($id);
        $res = $projeto->delete();

        if($res){
            return true;
        } else {
            return false;
        }
    }

    // atualizando um projeto usando o ::update com o id
    public static function update($dados, $id){
        $update = Projetos::where('id', $id)->update($dados);

        if($update){
            return true;
        } else {
            return false;
        }
    }
    
}