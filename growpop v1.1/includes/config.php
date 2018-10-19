<?php 


$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "growpop";

$conexion = @mysqli_connect($db_server,$db_user,$db_pass,$db_name) or die("NO SE HA PODIDO CONECTAR A LA BASE DE DATOS");


?>