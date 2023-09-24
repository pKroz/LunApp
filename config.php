<?php
$usuario  = "u537253387_app";
$password = "U537253387_app";
$servidor = "localhost";
$basededatos = "u537253387_app";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");
?>