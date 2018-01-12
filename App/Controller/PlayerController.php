<?php

namespace App\Controller; 


use App\Game\Player;
use App\View\View;

class PlayerController extends Player{

    public function logout(){
        
        View::make('logout.game');
    }
    public function addUser(){
        session_start();
        Player::register();
        View::make('addUser.sucess');
    }
    
    public function game(){
        session_start();
        $jogador = $_COOKIE['nome'] ?? null;
        $paises = Player::maps();
        View::make('player.game', [
        'jogador'=> $jogador,
        'paises'=> $paises
        ]);
    }

    public function story(){
        session_start();

        $jogador = $_COOKIE['nome'] ?? null;
        $paises = Player::maps();

        View::make('partida.game', [
            'jogador'=> $jogador,
            'paises'=> $paises
        ]);
    }

    public function warGame(){
        session_start();
        /* setcookie('gamer[nome]', $_POST['nome']);
        setcookie('gamer[partida]', $_POST['partida']);
        setcookie('gamer[pontos]', $_POST['pontos']);
        setcookie('gamer[numCidade]', $_POST['numCidade']); */

        $jogador = $_COOKIE['nome'] ?? null;
        $_SESSION['nome'] = $jogador;
        /* setcookie("cookie[três]", "cookiethree");
        setcookie("cookie[dois]", "cookietwo");
        setcookie("cookie[um]", "cookieone");

        // após a página ser carregada, mostra a saída
        if (isset($_COOKIE['cookie'])) {
            foreach ($_COOKIE['cookie'] as $name => $value) {
                echo "$name : $value <br />\n";
            }
        }
        setcookie ("TesteCookie", "", time() - 3600); */
        /* $jogador = $user; */
        $paises = Player::maps();
        $partida = Player::partida();
        Player::addCountry();
        Player::autenticar();

        View::make('partida.game', [
            'jogador'=> $jogador,
            'paises'=> $paises,
            'partida'=> $partida
        ]);
    }

    public function pontos(){
        $ponto = 0;
    }

    public function paises(){
        
    }


}