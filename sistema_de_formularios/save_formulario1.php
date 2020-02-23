<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <p></p>
    <p></p>
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <meta http-equiv="X=UA-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
    <a href="formulario1.php">ATRAS</a>   
    <link rel="stylesheet" href="estiloscss/main.css">
    </head>
  <body>
      </form>
    </div>
  </body>
</html>

<?php
//Contenedor Datos();
session_start();
$user_id = $_SESSION['user']['user_id'];

$Nombre=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Cedula=$_POST["Cedula"];
$ColegioElectoral=$_POST["ColegioElectoral"];
$CentroDeVotacion=$_POST["CentroDeVotacion"];
$Sexo=$_POST["Sexo"];
$Telefono=$_POST["Telefono"];
$Email=$_POST["Email"];
$Edad=$_POST["Edad"];
$NecesitaDeTrasporteParaIraVotar=$_POST["NecesitaDeTrasporteParaIraVotar"];
$Direccion=$_POST["Direccion"];
$Sector=$_POST["Sector"];

//Consultar si el usuerio existe en la base de datos();
require("conexion.php");

if(buscaRepetido($Cedula,$conectar)==1){
    echo
    '<script>
    alert("Estos Datos Ya Estan Registrado");


    </script>';
    
//Introducir Datos();
}else{
    $cons = "INSERT INTO registros(Nombres, Apellidos, Cedula, Direccion, ColegioElectoral, CentroDeVotacion, Sexo, Telefono, Email, NecesitaDeTrasporteParaIraVotar, Edad, Sector, user_id)VALUES('$Nombre', '$Apellidos', '$Cedula', '$Direccion','$ColegioElectoral', '$CentroDeVotacion','$Sexo','$Telefono', '$Email','$NecesitaDeTrasporteParaIraVotar','$Edad','$Sector',$user_id)";

    $resultado = mysqli_query($conectar, $cons);

    echo '<script>
    alert("Datos Correctamente Ingresados"); 
    </script>';
}

//Consultar si el usuerio existe en la base de datos();
$select = mysqli_query($conectar, "SELECT * FROM registros WHERE Cedula = $Cedula");


 function buscaRepetido($Cedula,$conectar){
     $sql="SELECT * from registros where Cedula='$Cedula'";
     $resultado = mysqli_query($conectar, $sql);

     if(mysqli_num_rows($resultado)> 0){
         return 1;
     }else{
         return 0;
     }
 }




mysqli_close($conectar);
//header("location: formulario.php");
?> 
