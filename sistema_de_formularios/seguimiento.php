<?php
//Conexion con el login();
require("conexion.php");
ini_set('display_errors', 0);
session_start();
$sesion = $_SESSION['user'];

if(!isset($sesion)){
    header("location: login.php");
}
//Introducir VOTO();
if($_POST['registro_id']){
    $voto = $_POST['voto'];
    $registro = $_POST['registro_id'];
    $update = "update registros set voto = '$voto' where registro_id = $registro";
    mysqli_query($conectar,$update);
}
?>
<html>
<p></p>
    <a href="index.php">ATRAS</a>   
<p></p>
<title>Seguimiento</title>
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<meta http-equiv="X=UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
<link rel="stylesheet" href="estiloscss/main.css">
<style type="text/css"></style> 
<form action="" method="post">
    
    <label for="">
        <input type="text" name="buscar" id="">
    </label>
     <input type="submit" value="BUSCAR!" name="enviando">
    </form>
</html>
<?php
if($_POST["buscar"]){
    $busqueda=$_POST["buscar"];
}




switch ($sesion['rol']) {
    case 'supervisor':
        $user_id = $sesion['user_id'];
        $consulta="SELECT * FROM registros WHERE CentroDeVotacion LIKE '%$busqueda%' and user_id = $user_id";
        break;
    case "administrador":
        $consulta="SELECT registros.*, users.nombre, users.apellido FROM registros LEFT JOIN users ON registros.user_id = users.user_id WHERE CentroDeVotacion LIKE '%$busqueda%' or users.nombre LIKE '%$busqueda%'";
        break;
}    


$resultado=mysqli_query($conectar,$consulta);

$cantidad = 1;

echo'<table cellpadding="4" style="font-size:9px"><tr>
<th>No.</th>
<th>Nombres:</th>
<th>Apellidos:</th>
<th>Cedula:</th
><th>Colegio Electoral:</th>
<th>Centro De Votacion:</th>
<th>Sexo:</th>
<th>Email:</th>
<th>Telefono:</th>
<th>Direccion:</th>
<th>Edad:</th>
<th>Necesita De Trasporte Para Ir a Votar:</th>
<th>Sector:</th>
<th>Usuario:</th>
<th>Voto:</th>
</tr>';

    while($fila=mysqli_fetch_array($resultado, MYSQLI_BOTH)){
 
      echo "<tr><td>".$cantidad."</td><td>";
      echo $fila['Nombres']."</td><td>";
      echo $fila['Apellidos']."</td><td>";
      echo $fila['Cedula']."</td><td>";
      echo $fila['ColegioElectoral']."</td><td>";
      echo $fila['CentroDeVotacion']."</td><td>";
      echo $fila['Sexo']."</td><td>";
      echo $fila['Email']."</td><td>";
      echo $fila['Telefono']."</td><td>";
      echo $fila['Direccion']."</td><td>";
      echo $fila['Edad']."</td><td>";
      echo $fila['NecesitaDeTrasporteParaIraVotar']."</td><td>";
      echo $fila['Sector']."</td><td>";
      echo $fila['nombre']." ".$fila['apellido']."</td>";
      if($fila['voto'] == "NO"){
          echo '<td><form class="form__reg" action="" method="post">
          <input type="hidden" id="voto" name="voto" value="SI">
          <input type="hidden" id="registro_id" name="registro_id" value="'.$fila["registro_id"].'">  
          <input type="submit" class="btn__submit" name="votar" value="Votar">
          </form></td>';
      }else{
          echo'<td></td>';
      }

      $cantidad++;
        
    }
echo '</table><br><br><br>';

    mysqli_free_result($resultado);
    
    switch ($sesion['rol']) {
        case 'supervisor':
            $user_id = $sesion['user_id'];
            $consulta="SELECT count(registro_id) as cantidad, CentroDeVotacion FROM registros WHERE CentroDeVotacion LIKE '%$busqueda%' and user_id = $user_id group by CentroDeVotacion";
            break;
        case "administrador":
        $consulta="SELECT count(registro_id) as cantidad, CentroDeVotacion FROM registros LEFT JOIN users ON registros.user_id = users.user_id WHERE CentroDeVotacion LIKE '%$busqueda%' or users.nombre LIKE '%$busqueda%' group by CentroDeVotacion";
            break;
    } 

    //Mostrar cantidad de personas en cada centro();
    $resultado=mysqli_query($conectar,$consulta);

    echo'
    <table cellpadding="6" style="font-size:9px">
        <tr>
            <th>Cantidad De Personas:</th>
            <th>Centro De Votacion:</th>
        </tr>';
        while($fila=mysqli_fetch_array($resultado, MYSQLI_BOTH)){
            echo "<tr>
                    <td>".$fila['cantidad']."</td>
                    <td>".$fila['CentroDeVotacion']."</td>
            </tr>";
        }
    echo '</table>';
    mysqli_close($conex);
?>
