<?php

$cnx = mysqli_connect("localhost","root","","db_burocredito") or die("Error De Conexion");

$nombre=$_POST['name'];
$email=$_POST['email'];
$celular=$_POST['cel'];
$password=$_POST['contra'];

$sql = "INSERT into ajax_usuario
(name, email, cel, contra) values ('$nombre','$email','$celular','$password')";
echo mysqli_query($cnx,$sql);

?>