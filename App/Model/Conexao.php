<?php

namespace App\Model;

class Conexao{
    public static $instance;

    public static function getConexao(){
        if(!isset(self::$instance))
            self::$instance = new \PDO("mysql:host=localhost;dbname=game","root",'');

        return self::$instance;
    }
}