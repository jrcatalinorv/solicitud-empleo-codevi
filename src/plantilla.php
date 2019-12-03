<?php 
   if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "home" ||
         $_GET["ruta"] == "formulario" ||
         $_GET["ruta"] == "formulario-esp"
		){
        include "vistas/".$_GET["ruta"].".php";
      }else{
        include "vistas/404.php";
      }
    }else{
      include "vistas/home.php";
    } 
  ?> 