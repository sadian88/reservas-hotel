<?php

require_once "conexion.php";

Class ModeloBanner{
    static public function mdMostrarBanner($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt -> fetchAll();
        
        $stmt -> close();
        
        $stmt = null;

    }
}