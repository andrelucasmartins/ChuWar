<?php

namespace App\Model;

class UsuarioDao{

    public function create(Usuario $u){
        $sql = 'INSERT INTO usuario VALUES(?,?,?)';

        $send = Conexao::getConexao()->prepare($sql);
        $send->bindValue(1, null);
        $send->bindValue(2, $u->getNome());
        $send->bindValue(3, $u->getSenha());
        $send->execute();
    }

    public function read(){
        $sql = "SELECT * FROM usuario";
        $search = Conexao::getConexao()->prepare($sql);
        $search->execute();

        if($search->rowCount() > 0){
            $result = $search->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }

        return [];

    }

    public function update(Usuario $u){
        $sql = 'UPDATE usuario SET nome = ?, senha = ? WHERE id = ?';

        $send = Conexao::getConexao()->prepare($sql);
        
        $send->bindValue(1, $u->getNome());
        $send->bindValue(2, $u->getSenha());
        $send->bindValue(3, $u->getId());
        $send->execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM usuario WHERE id = ?';

        $send = Conexao::getConexao()->prepare($sql);
        
        $send->bindValue(1, $id);
        $send->execute();
    }
}