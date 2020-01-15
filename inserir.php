<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inserir</title>
    <style>
        .tab-content{
            width: 1100px;
            height: 900px;
            margin-left: -400px;
            
                
        }
        .container{
          border: white;
          border: 10px;
            width:500px;
            margin-left: 20px;
            position: relative;
            background-color: rgb(66, 85, 82)
        }
        .container2{
            width:500px;
            margin-left: 586px;
            margin-top:-316px;
            position: relative;
            background-color: cadetblue;
            
        }
        .group{
          margin-top: 100px;
        }
                       
    </style>
</head>
<body>
<form action="salvouentrada.php" method="post">
  <div class=" justify-content-left" ;>
        <div class="form-group" >
            <label for="exampleInputEmail1">Data entrada</label>
            <input type="date" class="form-control" name="dataentrada" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Data referente a entrada</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição entrada</label>
            <textarea class="form-control" name="descricaoentrada" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">valor entrada</label>
            <input type="text" class="form-control" name="valorentrada" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Data referente a entrada</small>
        </div>
        <button type="submit" >
   </div> 
   
</form>  
<form action="salvousaida.php" method="post">
  <div class=" justify-content-left" ;>
        <div class="form-group" >
            <label for="exampleInputEmail1">Data Saida</label>
            <input type="date" class="form-control" name="datasaida" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Data referente a saida</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição entrada</label>
            <textarea class="form-control" name="descricaosaida" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">valor entrada</label>
            <input type="text" class="form-control" name="valorsaida" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Data referente a saida</small>
        </div>
     <button type="submit">   
   </div> 
</form>
</body>
</html>