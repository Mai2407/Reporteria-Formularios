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
<html>
<p></p>
<p></p>
<a href="index.php">ATRAS</a>  
<p></p> 
<title>Reporteria</title>
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<meta http-equiv="X=UA-compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet"> 
<link rel="stylesheet" href="estiloscss/main.css">
<style type="text/css"></style> 
<form action="" method="post">
</form>
</html>
<?php

    //Mostrar resultado por completo();
    $resultado=mysqli_query($conectar,$consulta);

$cantidad = 1;

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

    echo '<table>';

    echo"<th>&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;SEXOS</th>";

    $sql = "SELECT COUNT(*) total FROM registros where Sexo = 'MASCULINO'";

    $result = mysqli_query($conectar, $sql);

    $fila = mysqli_fetch_assoc($result);


    echo"<tr><th>MASCULINO:</th>
    <td>".$fila['total'];
  

    $sql = "SELECT COUNT(*) total FROM registros where Sexo = 'FEMENINO'";

    $result = mysqli_query($conectar, $sql);

    $fila = mysqli_fetch_assoc($result);


        echo"<tr><th>FEMENINO:</th>
    <td>".$fila['total'];

    echo '</table><br><br><br>';

       echo '<table>';

   echo"<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RANGO DE EDADES</th>";

    $sql = "SELECT COUNT(*) total FROM registros WHERE Edad = '18' || Edad = '19' || Edad = '20' || Edad = '21' || Edad = '22' || Edad = '23' || Edad = '24' || Edad = '25' || Edad = '26' || Edad = '27' || Edad = '28' || Edad = '29' || Edad = '30' || Edad = '31' || Edad = '32' || Edad = '33' || Edad = '34' || Edad = '35'";

    $result = mysqli_query($conectar, $sql);

    $fila = mysqli_fetch_assoc($result);


        echo"<tr><th>RANGO DE EDADES DEL 18 A 35:</th>
    <td>".$fila['total'];



    $sql = "SELECT COUNT(*) total FROM registros WHERE Edad = '36' || Edad = '37' || Edad = '38' || Edad = '39' || Edad = '40' || Edad = '50'";

    $result = mysqli_query($conectar, $sql);

    $fila = mysqli_fetch_assoc($result);


        echo"<tr><th>RANGO DE EDADES DEL 36 A 50:</th>
        <td>".$fila['total'];

    echo "</td></tr></td>";
    

    $sql = "SELECT COUNT(*) total FROM registros WHERE Edad = '51' || Edad = '52' || Edad = '53' || Edad = '54' || Edad = '55' || Edad = '56' || Edad = '57' || Edad = '58' || Edad = '59' || Edad = '60' || Edad = '61' || Edad = '62' || Edad = '63' || Edad = '64' || Edad = '65' || Edad = '66' || Edad = '67' || Edad = '68' || Edad = '69' || Edad = '70' || Edad = '71' || Edad = '72' || Edad = '73' || Edad = '74' || Edad = '75' || Edad = '76' || Edad = '77' || Edad = '78' || Edad = '79' || Edad = '80' || Edad = '81' || Edad = '82' || Edad = '83' || Edad = '84' || Edad = '85' || Edad = '86' || Edad = '87' || Edad = '88' || Edad = '89' || Edad = '90' || Edad = '91' || Edad = '92' || Edad = '93' || Edad = '94' || Edad = '95' || Edad = '96' || Edad = '97' || Edad = '98' || Edad = '99' || Edad = '100'";

    $result = mysqli_query($conectar, $sql);

    $fila = mysqli_fetch_assoc($result);


        echo"<tr><th>RANGO DE EDADES DEL 51 O MAS:</th>
    <td>".$fila['total'];

        echo '</table>';
        

echo '</table><br><br><br>';


        echo '<table>';

        echo"<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CENTROS DE VOTACIONES</th>";
    
        $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEG.NTRA.SRA.DEL ROSARIO DE FATIMA'";
    
        $result = mysqli_query($conectar, $sql);
    
        $fila = mysqli_fetch_assoc($result);
    
    
        echo"<tr><th>COLEG.NTRA.SRA.DEL ROSARIO DE FATIMA:</th>
     <td>".$fila['total'];
      
    
        $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO DE ATENCION ESPECIALIZADA EN SALUD AMBULATO'";
    
        $result = mysqli_query($conectar, $sql);
    
        $fila = mysqli_fetch_assoc($result);
    
    
        echo"<tr><th>CENTRO DE ATENCION ESPECIALIZADA EN SALUD AMBULATO:</th>
     <td>".$fila['total'];
      

     $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO SANTA CLARA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO SANTA CLARA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO EVANGELICO PARROQUIAL'";
    
  $result = mysqli_query($conectar, $sql);

  $fila = mysqli_fetch_assoc($result);


  echo"<tr><th>COLEGIO EVANGELICO PARROQUIAL:</th>
<td>".$fila['total'];

$sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA SAN JUAN'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA SAN JUAN:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'HOSPITAL DR. DARIO CONTRERAS'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>HOSPITAL DR. DARIO CONTRERAS:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO CARDENAL SANCHA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO CARDENAL SANCHA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO SAN FRANCISCO DE ASIS'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO SAN FRANCISCO DE ASIS:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO ISABELITA LA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO ISABELITA LA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA PROF. ESCOLASTICA PAEZ'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA PROF. ESCOLASTICA PAEZ:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO PURISIMA CONCEPCION'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO PURISIMA CONCEPCION:</th>
  <td>".$fila['total'];

  
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO SAN MARTIN DE PORRES'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO SAN MARTIN DE PORRES:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA REPUBLICA DE PANAMA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA REPUBLICA DE PANAMA:</th>
  <td>".$fila['total'];


  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'EST.BOMBEROS CIVILES NO.2'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>EST.BOMBEROS CIVILES NO.2:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'JUZGADO DE PAZ DE LA 4TA CIRC.'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 

  echo"<tr><th>JUZGADO DE PAZ DE LA 4TA CIRC.:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'POLICLINICA ZONA E IDSS'";
    
  $result = mysqli_query($conectar, $sql);

  $fila = mysqli_fetch_assoc($result);


  echo"<tr><th>POLICLINICA ZONA E IDSS:</th>
<td>".$fila['total'];

$sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'OF.DE METEOROLOGIA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>OF.DE METEOROLOGIA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'INST.POLITECNICO PROF.PILAR CONSTANZO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>INST.POLITECNICO PROF.PILAR CONSTANZO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUC. UNIVERSO PRIMERO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUC. UNIVERSO PRIMERO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA SANTA ISABEL'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA SANTA ISABEL:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA RAMON MATIAS MELLA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA RAMON MATIAS MELLA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO DIVINA PROVIDENCIA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO DIVINA PROVIDENCIA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA PRIMARIA RURAL BELICE'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA PRIMARIA RURAL BELICE:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CLUB EL ROSAL'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CLUB EL ROSAL:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESC. PRIMARIA PATRIA MELLA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESC. PRIMARIA PATRIA MELLA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA SOCORRO SANCHEZ'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA SOCORRO SANCHEZ:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'POLITECNICO MA. DE LA ALTAGRACIA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>POLITECNICO MA. DE LA ALTAGRACIA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO HOGAR MASONICO JAIME MANUEL FERNANDEZ'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO HOGAR MASONICO JAIME MANUEL FERNANDEZ:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO PSICOPEDAGOGICO FUENTE INAGOTABLE'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 

  echo"<tr><th>CENTRO PSICOPEDAGOGICO FUENTE INAGOTABLE:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO CRISTO DE LOS MILAGROS'";
    
  $result = mysqli_query($conectar, $sql);

  $fila = mysqli_fetch_assoc($result);


  echo"<tr><th>COLEGIO CRISTO DE LOS MILAGROS:</th>
<td>".$fila['total'];

$sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'LICEO EUGENIO MARIA DE HOSTOS'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>LICEO EUGENIO MARIA DE HOSTOS:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO LOS ROSANTES'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO LOS ROSANTES:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO SAGRADO PARAISO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO SAGRADO PARAISO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA GENERAL GREGORIO LUPERON'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA GENERAL GREGORIO LUPERON:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA PARROQUIA FE Y ALEGRIA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA PARROQUIA FE Y ALEGRIA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO ALMA ROSA CHOTHEN'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO ALMA ROSA CHOTHEN:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'COLEGIO TIRSO DE MOLINA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>COLEGIO TIRSO DE MOLINA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO JIMENEZ DE LOS SANTOS'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO JIMENEZ DE LOS SANTOS:</th>
  <td>".$fila['total'];
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CLUB DEPORTIVO Y CULTURAL OZAMA (MERLIN)'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CLUB DEPORTIVO Y CULTURAL OZAMA (MERLIN):</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA PRIMARIA CELINA PELLIER'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA PRIMARIA CELINA PELLIER:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO CLAREN LEHMAN'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO CLAREN LEHMAN:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO MARLYN'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO MARLYN:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA DEMETRIO BETANCES'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA DEMETRIO BETANCES:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO SANTA MARIA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO SANTA MARIA:</th>
  <td>".$fila['total'];
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO PODELO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO PODELO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CLUB EL BRISAL'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CLUB EL BRISAL:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA PIKI LORA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA PIKI LORA:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO NUEVO SIGLO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO NUEVO SIGLO:</th>
  <td>".$fila['total'];
  
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CLUB CALERO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CLUB CALERO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA SALOME UREÑA'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA SALOME UREÑA:</th>
  <td>".$fila['total'];
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'SALON MULTIUSO ISABELITA (LA CANCHA)'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>SALON MULTIUSO ISABELITA (LA CANCHA):</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'POLITECNICO JOSE MARIA VELOZ'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>POLITECNICO JOSE MARIA VELOZ:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'SALON MULTIUSO EL DUARTE'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>SALON MULTIUSO EL DUARTE:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA ERCILIA PEPIN'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA ERCILIA PEPIN:</th>
  <td>".$fila['total'];
  
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'SALON MULTIUSO BELLO CAMPO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>SALON MULTIUSO BELLO CAMPO:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'MULTIUSO URBANIZACION HAMARAP'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>MULTIUSO URBANIZACION HAMARAP:</th>
  <td>".$fila['total'];
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'INSTITUTO POLITECNICO PROF.JUAN BOSCH'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>INSTITUTO POLITECNICO PROF.JUAN BOSCH:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'SALON PARA EVENTOS SECTOR PARQUE DEL ESTE'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>SALON PARA EVENTOS SECTOR PARQUE DEL ESTE:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO ROSA DUARTE'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO ROSA DUARTE:</th>
  <td>".$fila['total'];

  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'ESCUELA BASICA EL DESPERTAR (NUEVO LOCAL)'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>ESCUELA BASICA EL DESPERTAR (NUEVO LOCAL):</th>
  <td>".$fila['total'];
  
  $sql = "SELECT COUNT(*) total FROM registros where CentroDeVotacion = 'CENTRO EDUCATIVO AMA A TU PROJIMO'";
    
     $result = mysqli_query($conectar, $sql);
 
     $fila = mysqli_fetch_assoc($result);
 
 
     echo"<tr><th>CENTRO EDUCATIVO AMA A TU PROJIMO:</th>
  <td>".$fila['total'];

     echo '<table>'; 
    mysqli_close($conex);
?>