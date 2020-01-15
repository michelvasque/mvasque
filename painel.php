<!DOCTYPE html>
<html lang="en">
<head>



      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<ul class="nav justify-content-center" >
  <li class="nav-item">
    <a class="nav-link " href="inserir.php" tabindex="-1">Inserir</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="consultar.php" tabindex="-1">Consultar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"tabindex="-1">Gráficos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#" tabindex="-1" >Relatorios</a>
  </li>

  <div id="columnchart_material" style="width: 800px; height: 500px; "></div>
</ul>
<?php
   include("conexao.php");
   
    $sqll=("select Month(data),valor,tipo from registro");
   $resultado = mysqli_query($conexao,$sqll) or die ("erro ao buscar");
   $janeiroEntrada=0;$janeiroSaida=0;$fevereiroEntrada=0;$fevereiroSaida=0;$marcoEntrada=0;
   $marcoSaida=0;$abrilEntrada=0;$abrilSaida=0;
   
   while($dados = mysqli_fetch_array($resultado)){
      if($dados['Month(data)'] == "1"){
        if($dados['tipo']=="entrada"){
              $janeiroEntrada=$janeiroEntrada+$dados['valor'];
            }elseif($dados['tipo']=="saida"){
              $janeiroSaida=$janeiroSaida+$dados['valor'];
        }}elseif($dados['Month(data)'] == "2"){  
                if($dados['tipo']=="entrada"){
                  $fevereiroEntrada=$fevereiroEntrada+$dados['valor'];
                }elseif($dados['tipo']=="saida"){
                  $fevereiroSaida=$fevereiroSaida+$dados['valor'];
        }}elseif($dados['Month(data)'] == "3"){  
                if($dados['tipo']=="entrada"){
                  $marcoEntrada=$marcoEntrada+$dados['valor'];
                }elseif($dados['tipo']=="saida"){
                  $marcoSaida=$marcoSaida+$dados['valor'];
        }}elseif($dados['Month(data)'] == "4"){  
                if($dados['tipo']=="entrada"){
                  $abrilEntrada=$abrilEntrada+$dados['valor'];
                }elseif($dados['tipo']=="saida"){
                  $abrilSaida=$abrilSaida+$dados['valor'];
        }}else{}

        
    }
  // echo $janeiro['Month(data)'];
   //     echo $janeiro['valor'];
  //      echo $janeiro['tipo'];
  //  $entradaJaneiro=0;$saidaJaneiro=0;
   // foreach($janeiro as $chave =>$val){
   //   if($val == "entrada"){
    //    $entradaJaneiro = $chave['valor'] + $entradaJaneiro;
    //  }elseif($val == "saida"){
    //    $saidaJaneiro = $chave['valor'] + $saidaJaneiro;
     // }
   // }
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['mês', 'Entradas', 'Saidas', 'Em Caixa'],
          ['Janeiro', <?php echo $janeiroEntrada; ?> , <?php echo $janeiroSaida;?> , <?php echo $janeiroEntrada-$janeiroSaida ?>],
          ['Fevereiro',<?php echo $fevereiroEntrada; ?> , <?php echo $fevereiroSaida;?> , <?php echo $fevereiroEntrada-$fevereiroSaida ?>],
          ['março', <?php echo $marcoEntrada; ?> , <?php echo $marcoSaida;?> , <?php echo $marcoEntrada-$marcoSaida ?>],
          ['Abril', <?php echo $abrilEntrada; ?> , <?php echo $abrilSaida;?> , <?php echo $abrilEntrada-$abrilSaida ?>]
        ]);

        var options = {
          chart: {
            title: 'Fluxo de Caixa',
            subtitle: 'Entradas, Saidas, e Total em Caixa: jan-dez de 2020',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

</body>
</html>