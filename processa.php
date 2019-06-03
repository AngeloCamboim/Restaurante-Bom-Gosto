<?php
session_start();

include_once("conexao.php");//Linka com o arquivo de conexão

//Pega os dados do formulário no HTML
$prato = filter_input(INPUT_POST, 'prato');
$quantidade = filter_input(INPUT_POST, 'quantidade');	
$bebida = filter_input(INPUT_POST, 'bebida');
$numero = filter_input(INPUT_POST, 'numero');
$endereco = filter_input(INPUT_POST, 'endereco');
$sobremesa = filter_input(INPUT_POST, 'sobremesa');
//Comando SQL para inserir dados no banco
$result_usuario = "INSERT INTO  entrega (prato, quantidade, bebida, numero, endereco, sobremesa) VALUES ('$prato', '$quantidade', '$bebida', '$numero', '$endereco', '$sobremesa')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//Se o registro der certo
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green'>Entrega registrada com sucesso! </p>";
	header("Location: entrega2.php");

//Se o registro der errado		
}else{
	$_SESSION['msg'] = "<p style='color:red'> Erro no Registro, nos informe para que possamos corrigir </p>";
	header("Location: entrega2.php");
}
?>