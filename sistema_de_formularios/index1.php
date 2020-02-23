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
     <meta charset="utf-8">
     <title>Inicio</title>
    </head>
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
     <meta http-equiv="X=UA-compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
     <link rel="stylesheet" href="estiloscss/main1.css">
     <body>
    <div>
    <ul>
      <li> 
        <li><a href="formulario1.php">&#x2328;Registrar</a></li>
        <li><a href="seguimiento1.php">&#x1f50e;Seguimiento</a></li>
        <li><a href="./salir.php">&#x274c;Cerrar Sesion</a></li>
      </li>
    </ul>
  </div>
  <script src="main1.js" charset="utf-8"></script>
 </body>  
</html>