<?php

use App\Usuario;

class UsuarioCadastrar extends Usuario{
    public function cadastrar(){
        $this->nome = $nome;
        $this->pontos = $pontos;
    }

}