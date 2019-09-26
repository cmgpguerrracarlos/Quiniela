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
};

?>