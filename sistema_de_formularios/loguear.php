<?php
ini_set('display_errors', 0);

require 'conexion.php';
$user = $_POST['user'];
$password = $_POST['password'];
//echo $user.' '.$password;

//Tomar valores y consultar para darle entrada al sistema();
$query = "SELECT * from users where email = '$user' and password = '$password';";
$bdconect = mysqli_query($conectar,$query);



$valores = mysqli_fetch_array($bdconect,MYSQLI_ASSOC);
//La entrada al sistema por roles;
if($valores["rol"] != "administrador" ){
  session_start();
   $_SESSION['user'] = $valores;
   //print_r($valores);
  header("location: ./index1.php");
}

else if($valores["rol"] != "supervisor" ){
  session_start();
   $_SESSION['user'] = $valores;
   //print_r($valores);
  header("location: ./index.php");

}else{
  header("location: ./login.php"); 
}


?>
