<?php
//Conexion con el login();
session_start();
$sesion = $_SESSION['user'];

if(!isset($sesion)){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <meta http-equiv="X=UA-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
    <link rel="stylesheet" href="estiloscss/main.css">
     <p></p>
    <a href="index1.php">ATRAS</a>   
</head>
<body>
<div class="container">
       <div class="form__top">           
        <h2>Formulario para<span> Registro</span></h2>
        <form  class="form__reg" action="save_formulario.php" method="POST">
        <input class="input" name="Nombres" type="text" placeholder="&#128100; Nombres" required autofocus>
        <input class="input" name="Apellidos" type="text" placeholder="&#8962; Apellidos" required>
        <input class="input" name="Cedula" type="text" placeholder="&#127380; Cedula" required>
        <input class="input" name="Direccion" type="text" placeholder="&#8962; Direccion" required>
        <input class="input" name="ColegioElectoral" type="text" placeholder="&#8962; Colegio Electoral" required>
        <select class="input" name="CentroDeVotacion" type="text" placeholder="&#8962; Centro De Votacion" required>
        <option value="">Seleccione Centro De Votacion</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <select class="input" name="Sexo" required>
            <option value="">Seleccione Sexo</option>
            <option value="FEMENINO">FEMENINO</option>
            <option value="MASCULINO">MASCULINO</option>
        </select>
        <input class="input" name="Telefono" type="tel" placeholder="&#x1f4de; Telefono" required>
        <input class="input" name="Email" type="email" placeholder="&#9993; Email" required>
        <select class="input" name="NecesitaDeTrasporteParaIraVotar" required>
            <option value="">Necesita De Trasporte Para Ir a Votar"</option>
            <option value="SI">SI</option>
            <option value="NO">NO</option>
        </select>
        <input class="input" name="Edad" type="text" placeholder="&#8962; Edad" required>
        <select class="input" name="Sector" required>
            <option value="">Seleccione Sector</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select> 
        <div class="btn__form">
            <input type="submit" class="btn__submit" name="save" value="GUARDAR">
            <input type="reset" class="btn__reset" value="LIMPIAR">
        </div>
      </div>
    </form>

    <script src="jquery-3.4.1.min.js"></script>

    <script>
        $("#no-valido").hide();
        $("#valido").hide();
    </script>

</body>
</html> 
