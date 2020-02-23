<?php

//Conexion con el login();
session_start();
$sesion = $_SESSION['user']['nombre'];

if(!isset($sesion)){
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=divice-width, initial-scale=1.0">
     <meta http-equiv="X=UA-compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
     <link rel="stylesheet" href="estiloscss/index.css">
     <title>Inicio</title>
    </head>
  <body>
  
    <header>
       <nav class="navegacion">
         <div>
           <ul class="menu">
              <li><a href="./salir.php">&#x274c;Cerrar Sesion</a></li>
              <li><a href="formulario.php">&#x2328;Registrar</a></li>
              <li><a href="seguimiento.php">&#x231a;Seguimiento</a></li>
              <li><a href="Reporteria.php">&#128202;Reporteria General</a></li>
              <li><a href="ingresaradmin.php">&#128100;Ingresar Nuevos Usuarios</a></li>
              <li><a href="#">&#x1f4ce;Reporterias Por Cordinadores</a>
                <ul class="submenu">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
                </ul>
                </li>
          </ul>      
       </nav>
    </header>
  </div>
  <script src="main1.js" charset="utf-8"></script>
 </body>  
</html>

