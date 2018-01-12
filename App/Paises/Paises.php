<?php
    
namespace App\Paises;

trait PaisesData{
    public function Maps(){
        $paises = array(
            'pais'=> array(
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
                )
        );
    
       /* echo json_encode($paises) */
       echo "<pre>";
       
       print_r($paises);
       print_r(array_values($paises));
    
        }
}

class Maps {
   use PaisesData;

}


