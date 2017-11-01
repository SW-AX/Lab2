<?php

$mysql = mysqli_connect("localhost","root","","quiz") or die(mysqli_error());


$email = $_POST['email'];
$pass = $_POST['pass'];

$usuarios = mysqli_query( $mysql,"select * from usuarios where email='$email' and password='$pass'");

$cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas

mysqli_close( $mysql); //cierra la conexion

if($cont==1){echo ("Login correcto<p><a href='layout.html?op=preguntas'>Puede insertar preguntas</a>");}
else {echo ("Email o contraseña incorrectos<p><a href='layout.html?op=login'>Puede intentarlo de nuevo</a>");}
?>