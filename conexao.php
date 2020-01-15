<?php 
$host = "localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao= mysqli_connect($host,$user,$pass,$banco) or die("erro ao conectar");
//mysql_select_db($banco,$conexao)or die(mysql_error());
?>