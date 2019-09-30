<?php

class sorteo_modelo{

    private $db;
    private $sorteo;

    public function __construct(){
        require_once 'bd.phph';
        $this->db = bd::conectar();
        $this->sorteo = array();


    }

    public function getSorteo(){


    }

}


?>