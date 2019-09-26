<?php

Class ControladorBanner{
   static public function ctrMostrarBanner(){
       $tabla = "banner";
       $respuesta = ModeloBanner::mdMostrarBanner($tabla);

       return $respuesta;
   }
}