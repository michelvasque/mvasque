<?php 
$host = "localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao= mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco,$conexao)or die(mysql_error());
$data= $_POST['dataentrada'];
$descricao= $_POST['descricaoentrada'];
$valor= $_POST['valorentrada'];
$tipo = "entrada";
$sql = mysql_query("insert into registro (data , descricao , valor , tipo) values ('$data','$descricao','$valor','$tipo')")or die(mysql_error());
header('Location:inserir.php');
?>