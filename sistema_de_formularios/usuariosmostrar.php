<?php
//Conexion();
require("conexion.php");
?>



<html>
<p></p>
<p></p>
<a href="ingresaradmin.php">ATRAS</a>  
<p></p> 
<title></title>
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<meta http-equiv="X=UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
<link rel="stylesheet" href="estiloscss/main.css">
<style type="text/css"></style> 
<form action="" method="post">
<body>          
</body>
</html>

<?php
//Conexion();
require("conexion.php");
//Mostrar los usuarios();
$cons = "SELECT * FROM users";

$resultado = mysqli_query($conectar, $cons);


    
    echo'<table cellpadding="10" style="font-size:12px"><tr>
    <th>User_id:</th>
    <th>Nombre:</th>
    <th>Apellido:</th>
    <th>Email:</th>
    <th>Password:</th>
    <th>Rol:</th>
    <th>User_parent:</th>
    <th>Status:</th>
    </tr>';
    
        while($fila=mysqli_fetch_array($resultado)){
           
            echo "<tr>
                    <td>".$fila['user_id']."</td>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['apellido']."</td>
                    <td>".$fila['email']."</td>
                    <td>".$fila['password']."</td>
                    <td>".$fila['rol']."</td>
                    <td>".$fila['user_parent']."</td>
                    <td>".$fila['status']."</td>
                  </tr>";
            
}
?>