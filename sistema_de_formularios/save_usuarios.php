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
    <a href="ingresaradmin.php">ATRAS</a>   
    <link rel="stylesheet" href="estiloscss/main.css">
    </head>
  <body>
      </form>
    </div>
  </body>
</html>

<?php
//Contenedor Datos();
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$password=$_POST["password"];
$rol=$_POST["rol"];
$user_parent=$_POST["user_parent"];
$status=$_POST["status"];

//Consultar si el usuerio existe en la base de datos();
require("conexion.php");

if(buscaRepetido($email,$conectar)==1){
    echo
    '<script>
    alert("Estos Datos Ya Estan Registrado");


    </script>';
    
//Introducir Datos();
}else{
    $cons = "INSERT INTO users(nombre, apellido, email, password, rol, user_parent, status)VALUES('$nombre', '$apellido', '$email', '$password','$rol', '$user_parent','$status')";

    $resultado = mysqli_query($conectar, $cons);

    echo '<script>
    alert("Datos Correctamente Ingresados"); 
    </script>';
}

//Consultar si el usuerio existe en la base de datos();
$select = mysqli_query($conectar, "SELECT * FROM users WHERE email = $email");


 function buscaRepetido($email,$conectar){
     $sql="SELECT * from users where email ='$email'";
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