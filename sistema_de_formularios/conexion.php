<?php
//Conexion();
 $host = "localhost";
 $user_db = "root";
 $clave_db = "";
 $bd = "sistema_recolector_datos";
 $conectar = mysqli_connect($host,$user_db,$clave_db,$bd);

 if (mysqli_connect_errno())
  {
      //En caso de fallar la conexion();
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>