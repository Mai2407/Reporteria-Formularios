<?php

//Conexion con el login();
require("conexion.php");
ini_set('display_errors', 0);
session_start();
$sesion = $_SESSION['user'];

if(!isset($sesion)){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial- scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
    <link rel="stylesheet" href="estiloscss/main.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <p></p>
    <a href="./salir.php">Cerrar Sesion</a>
    <p></p>
    <a href="usuariosmostrar.php">MOSTRAR</a> 
    <p></p>
    <a href="index.php">ATRAS</a> 
</head>
<body>
<div class="container">
       <div class="form__top">           
        <h2>Registro De<span> Usuarios</span></h2>
        <form  class="form__reg" action="save_usuarios.php" method="POST">
        <input class="input" name="nombre" type="text" placeholder="&#128100; Nombre" required autofocus>
        <input class="input" name="apellido" type="text" placeholder="&#8962; Apellido" required>
        <input class="input" name="email" type="text" placeholder="&#8962; Email" required>
        <input class="input" name="password" type="text" placeholder="&#8962; password" required>
        <select class="input" name="rol" required>
            <option value="">Rol</option>
            <option value="administrador">Administrador</option>
            <option value="supervisor">Supervisor</option>
        </select>
        <input class="input" name="user_parent" type="text" placeholder="&#8962; User_parent" required>
        <select class="input" name="status" required>
            <option value="">Status</option>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
        <div class="btn__form">
            <input type="submit" class="btn__submit" name="save" value="GUARDAR">
            <input type="reset" class="btn__reset" value="LIMPIAR">
        </div>
      </div>
</body>
</html> 
