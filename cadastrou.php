<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php  
  $email =$_POST['email'];
  $nome = $_POST['nome'];
  $senha= $_POST['senha'];
  $host = "localhost";
  $user="root";
  $pass="";
  $banco="cadastro";
  $conexao= mysql_connect($host,$user,$pass) or die(mysql_error());
  mysql_select_db($banco,$conexao)or die(mysql_error());
  $sql = mysql_query("insert into  usuario (nome , login , senha)  values ('$nome','$email','$senha')")or die(mysql_error());
  
echo "<h1>Cadastro efetuado com sucesso</h1>";
header('Location:index.php');

?>
</body>
</html>
