<?php

namespace App\View;

class jogadorView{
    public function imprimir(){
        $r = "Nome: ". $this->nome. "<br>";
        $r.= "Pontos". $this->pontos. "<br>";
        return $r;
    }
}

?>