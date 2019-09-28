<?php

class Sorteo{
    private $numeros = array();
    public function __construct(){
        for($i=1;$i<=20;$i++){
            $num = mt_rand(0,999);
            $this->numeros[$i] = $num;
        }
    }

    public function getNumeros(){
        return $this->numeros;
    }

    public static function convertir($num){ //Genera todos los numeros en 3 digitos
        if($num<10){
            $salida = "00".$num;
        }else if($num < 100){
            $salida = "0".$num;
        }else{
            $salida = "$num";
        }
        return $salida; 
    }

    //public function imprimir(){}

    public function verificador($nro, $rango){
        $tope;
        $ganar = 0;
        if($rango == "v"){
            $tope=20;
        }else if($rango == "d"){
            $tope=10;
        }else{
            $tope=1;
        }
        
        for($i=1;$i<=$tope;$i++){
            if($nro > 99){
                if($nro == $this->numeros[$i]){
                    $ganar = 500;
                }
            }else{
                $resto = $this->numeros[$i] % 100;
                if($resto == $nro){
                    $ganar = 70;
                }
            }                        
        }
        $ganancia = $ganar/$tope;
        return $ganancia;
    }
};

?>