<?php

namespace App\Controller;

use App\Model\{Usuario, UsuarioDao};
use App\Game\Player;
use App\View\View;

class UserController{

    public function index(){
        session_start();
    /* if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['nome'] == ""){
            header("Location: index.php");
        }
    } */
        View::make('user.login');
    }


    public function createUser(){
        /* create */
        $u = new Usuario();
        $u->setNome('Teste');
        $u->setSenha('123');

        $uDao = new UsuarioDao();
        $uDao->create($u);
    }

    public function readUser(){
        /* read */
        $uDao = new UsuarioDao();
        echo '<pre>';
        print_r($uDao->read());
    }

    public function updateUser(){
        /* update */
        $u = new Usuario();
        $u->setId(1);
        $u->setNome('Teste 02');
        $u->setSenha('1564');

        $uDao = new UsuarioDao();
        $uDao->update($u);
    }

    public function deleteUser(){
        /* delete */
        $uDao = new UsuarioDao();
        $uDao->delete(1);
    }

}







