<!DOCTYPE html>
<html lang="en">
<head>

<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
 crossorigin="anonymous">
<style>
#div1{
width:500px;
text-align: center;
position:relative;
left:350px;


}

</style>
<?php
include("conexao.php");
$host = "localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao= mysqli_connect($host,$user,$pass,$banco) or die("erro ao conectar");

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar</title>
</head>
<body>
     <div id=div1 >
      <form action="" method="get">
      <div class="form-group">
        <label for="exampleInputEmail1">Data Inicial</label>
        <input name="datainicial" class="form-control" type="date" placeholder="Digite a data para busca">
        <label for="exampleInputEmail1">Data Final</label>
        <input name="datafinal" class="form-control" type="date" placeholder="Digite a data para busca">
      </div>  
    
      <label for="exampleInputEmail1">Tipo</label>
    <select name="tipo">
        <option value="entrada">Entrada</option> 
        <option value="saida" selected>Saida</option>
        <option value="Ambos">Entrada/Saida</option>
    </select>
    <button type="submit">Buscar</button>
    </form>
    </div>
      <?php
     
          
      ?>
    <div id=div1>
     <table border="1">
        <tr>
            <td>Data</td>
            <td>Descrição</td>
            <td>Valor</td>
            <td>tipo</td>
        </tr>
        <?php
        $datainicial = $_GET['datainicial'];
        $datafinal = $_GET['datafinal'];
        $tipo = $_GET['tipo'];
        if(empty($datainicial) or empty($datafinal) ){
            echo "Digite as datas";
        }
       
        if($tipo == "Ambos"){
            $sql = ("Select * From registro where  data Between  '$datainicial' and  '$datafinal' ");
       }elseif($tipo == "saida"){
            $sql = ("select * from registro where  data Between '$datainicial' and  '$datafinal' and tipo = '$tipo' ") ;     
        }elseif($tipo == "entrada"){
           $sql = ("select * from registro where  data Between '$datainicial' and   '$datafinal' and tipo = '$tipo' ");
        }else{}
        $resultado = mysqli_query($conexao,$sql) or die ("erro ao buscar");
        while($dados = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $dados['data']; ?></td>
            <td><?php echo $dados['descricao'];?></td>
            <td><?php echo $dados['valor'];?></td>
            <td><?php echo $dados['tipo'];?></td>
        </tr>
        <?php }?>
       </div> 
  
</body>
</html>