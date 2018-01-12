<?php

namespace App\Login;

class LoginModel{
    function autenticar(){
        if(!isset($jogador)){
            if(!empty($jogador)){
                $autentic = true;
            }else{
                $autentic = false;
                header("Refresh:0;url=\\");
            }
        }
    }

    function startPartida(){
        if($autentic){
            if(empty($partida)){
                echo "Iniciar Partidar em 5 segundos";
                header("Refresh:5;url=\partida");
            }else{
                $partida = 0;
                $partida++;
                echo "Seja vindo iniciaremos a partida em 5 segundos";
                header("Refresh:5;url=/partida");
            }
        }
    }
}