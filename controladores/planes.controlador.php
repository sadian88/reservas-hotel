<?php

Class ControladorPlanes{

   static public function ctrMostrarPlanes(){

       $tabla = "planes";
       
       $respuesta = ModeloPlanes::mdMostrarPlanes($tabla);

       return $respuesta;
   }
}