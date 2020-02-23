<?php
//Cerrar Seccion();
session_start();

session_destroy();

header("location: ./login.php");
exit();

?>
