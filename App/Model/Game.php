<?php
namespace App\Model;

class Game{
    public $jogador;
    private $ponto;
    private $listPaises;

    function Game(){
        $uDao = new UsuarioDao();
        echo '<pre>';
        print_r($uDao->read());

        if(setJogador() !== null){
            return "Novo Jogador";
        }else{
            return "Entre com novo Jogador";
        }

    }

    public function getJogador(){
        return $this->jogador;
    }

    public function setJogador($jogador){
        $this->jogador = $jogador;
    }
    
    public function getPonto(){
        return $this->ponto;
    }

    public function setPonto($ponto){
        $this->ponto = $ponto;
    }

    public function getListPaises(){
        return $this->listPaises;
    }

    public function setListPaises($listPaises){
        $this->listaPaises = $listPaises;
    }

    
}