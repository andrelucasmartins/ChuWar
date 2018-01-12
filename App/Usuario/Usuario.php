<?php

namespace App\Usuario;

class Usuario{
    private $nome;

    // getters e setters
    public function getNome(){
        return $this->$nome;
    }
    public function setNome(){  
        $this->nome = $nome;
    }
    
    //construtors
    function usuario(){
        
    }
}