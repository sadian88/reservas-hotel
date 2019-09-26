<?php

require_once "conexion.php";

Class ModeloPlanes{

    static public function mdMostrarPlanes($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt -> fetchAll();
        
        $stmt -> close();
        
        $stmt = null;

    }
}