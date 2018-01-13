<?php

namespace App\Game;

class Player{
    public $computer;
    public $user;
    public $partida =0;
    public $partidaExistente =  1;
    public $countryPlayer = array();
    public $countryMachime = array();
   /*  public $jogador;
    public $pontos = 0;
    public $paises;
    public $partida = 0;

    public function __construct(string $jogador, int $pontos, string $paises, int $partida){
        $this->jogador = $jogador;
        $this->pontos = $pontos;
        $this->paises = $paises;
        $this->partida = $partida;
    }

    function jogador(){
        return $this->$jogador1;
    } */
    public function register(){
        setcookie('nome', $_POST['nomeC']);
    }

    public function maps(){
        /* $countries = array(            
                'Brasil'=> array("Argentina","Vezuela","Colombia"
                ),
                'Argentina'=> array("Brasil","Colombia"
                ),
                'Colombia'=> array("Brasil","Mexico"
                ),
                'Mexico'=> array("Colombia","EUA"
                ),
                'EUA'=> array("Mexico","Russia","Reino Unido"
                ),
                'Reino Unido'=> array("EUA","Franca","Alemanha"
                ),
                'Franca'=> array("Alemanha","Reino Unido","Egito"
                ),
                'Alemanha'=> array("Franca","Reino Unido","Egito","Russia"
                ),
                'Egito'=> array("Franca","Alemanha","Brasil","Africa do Sul"
                ),
                'Africa do Sul'=> array("Egito"
                ),
                'Russia'=> array("Alemanha","China","EUA"
                ),
                "China"=> array("Russia"
                )
        ); */

        $countries = [           
                        ["id"=>1, "pais"=>'Brasil',      "fronteira"=>["Argentina","Vezuela","Colombia"]],
                        ["id"=>2, "pais"=>'Argentina',   "fronteira"=>["Brasil","Colombia"]],
                        ["id"=>3, "pais"=>'Colombia',    "fronteira"=>["Brasil","Mexico"]],
                        ["id"=>4, "pais"=>'Mexico',      "fronteira"=>["Colombia","EUA"]],
                        ["id"=>5, "pais"=>'EUA',         "fronteira"=>["Mexico","Russia","Reino Unido"]],
                        ["id"=>6, "pais"=>'Reino Unido', "fronteira"=>["EUA","Franca","Alemanha"]],
                        ["id"=>7, "pais"=>'Franca',      "fronteira"=>["Alemanha","Reino Unido","Egito"]],
                        ["id"=>8, "pais"=>'Alemanha',    "fronteira"=>["Franca","Reino Unido","Egito","Russia"]],
                        ["id"=>9, "pais"=>'Egito',       "fronteira"=>["Franca","Alemanha","Brasil","Africa do Sul"]],
                        ["id"=>10, "pais"=>'Africa do Sul',"fronteira"=>["Egito"]],
                        ["id"=>11, "pais"=>'Russia',      "fronteira"=>["Alemanha","China","EUA"]],
                        ["id"=>12, "pais"=>"China",       "fronteira"=>["Russia"]]
                    ];
    
        
       /* echo json_encode($countries) */
       /* echo "<pre>"; */
       
       /* print_r($countries); */


       return $countries;
       
       /* foreach($countries as $data){

        echo count($data);
            if(is_array($data))
            {
                foreach($data as $other_data)
                {
                    echo $other_data, '<br/>';
                }
            }
            else
            {
                echo $data, '<br/>';
            }
      
       } */
    }

    public function partida() {
        if(Player::autenticar()){
            if($this->partida > 0){
               /*  echo " mesma"; */
                return $this->partida = $this->partidaExistente;
            }else{
                /* echo "nova partida"; */

                return $this->partida = 1;
            }
        }
    }
    

    function autenticar(){
        
        if(!isset($jogador)){
            if($_COOKIE['nome']){
                /* echo "test 1"; */
                return true;
            }else{
                  header("Location: \\");exit;
            }
        }
        
    }

    

    function startPartida(){
       
            if($partida > 0){
                echo " Start";
                /* echo "Iniciar Partidar em 5 segundos";
                header("Refresh:5;url=/partida"); */
            }else{
                $partida = 0;
                $partida++;
                /* echo "Seja vindo iniciaremos a partida em 5 segundos";
                header("Refresh:5;url=/partida"); */
            }
        
    }
   
    function addCountry(){
      /*   $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, 2);
        echo $input[$rand_keys[0]] . "\n";
        echo $input[$rand_keys[1]] . "\n"; */

        
       /*  if(is_array($paises) > 0){

                echo " rw test";
        
                for ($i=0; $i < count($paises); $i++) {
                    echo 'player '.$i;
                    $player1_pais[] = $paises["pais"][$i][$i];
                    for ($j=0; $j < count($paises) ; $j++) { 
                        $maquina_pais[] = $paises["pais"][$j][$j];
                        echo 'player '.$j;
                    }
                }
            
        }else{
            echo "test add array falhou <br>";
        } */
        
        $pais = Player::maps();
       
        foreach ($pais as $paisP => $psP) {
                        
                      if(($psP["id"]%2) == 0){
                            echo "Paises do Jogador - ".$psP["pais"]."<br><br>";
                            $this->countryPlayer[] = $psP["pais"];
                        }else{
                            echo "Paises do Maquina - ".$psP["pais"]."<br><br>";
                            $this->countryMachime[] = $psP["pais"];
                        }                        
                        
        }

        
       

        

        echo "Array dos paises do jogador. <br>";
        print_r($this->countryPlayer);

        echo "<br>Array dos paises da maquina. <br>";
        print_r($this->countryMachime); 
    }
 
    function search(){
        echo "Pesquisando";
    } 
}
