<html>
<head>
<title>Autentica</title>
<script type="text/javascript">
function loginsucesso(){
    setTimeout("window.location='painel.php'", 5000);
}
function loginfalhou(){
    setTimeout("window.location='index.php'", 5000);
}
</script>
</head>
<body>
<?php 
$host = "localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao= mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco,$conexao)or die(mysql_error());
$email= $_POST['email'];
$senha= $_POST['senha'];
$sql = mysql_query("select * from usuario where login='$email'and senha='$senha'")or die(mysql_error());
$row = mysql_num_rows($sql);
if($row>0)
{
    $_SESSION['email']=$_POST['email'];
    $_SESSION['senha']=$_POST['senha'];
    echo "voce esta logado";
    echo "<script>loginsucesso() </script>";
}else{
    echo "nome ou senha invalidos";
    echo "<script>loginfalhou()</script>";
}
?>
</body>
</html>