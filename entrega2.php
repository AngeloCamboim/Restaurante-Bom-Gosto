<?php
session_start(); //inicia a sessão
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <link rel="stylesheet" type="text/CSS" href="estilo.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<title>Entrega</title>
	</head>
	<body background="wallentrega.jpg">
	
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Restaurante Bom Gosto</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Principal</a></li>
      <li><a href="entrega.php">Entrega</a></li>
      <li><a href="endereco.html">Endereço</a></li>
      <li><a href="contato.html">Contato</a></li>
    </ul> 
  </div>
</nav>
<br />
<center>
  <h1 id="TituloEntrega">ENTREGAS</h1><br />
  <?php
  if(isset($_SESSION['msg'])){//Se existir essa variável
     echo $_SESSION['msg'];//Exibe a mensagem
     unset($_SESSION['msg']);//E logo destrói a variável para ser exibida uma só vez
   }
  ?>
  <form method="POST" action="processa.php">
    <input type="text" name="prato" placeholder="Informe o(s) prato(s)"><br />
    <input type="text" name="quantidade" placeholder="Quantidade"><br />
    <input type="text" name="bebida" placeholder="Bebida"><br />
    <input type="text" name="numero" placeholder="Informe seu número"><br />
    <input type="text" name="endereco" placeholder="Informe seu endereço"><br />
    <input type="text" name="sobremesa" placeholder="Informe a sobremesa"><br><br>
    <input type="submit" value="Enviar">
  </form>
</center>

</body>
</html>