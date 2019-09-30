<?php

class bd{

    public static function conectar(){
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=quiniela','cmgp','1234');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        }catch(Exception $e){
            die("Error" . $e->getMessage());
            echo "Linea de error ". $e->getLine();
        }
        
    }
}

?>