<?php
session_start();
include('conexao.php');
include('verificacao_login.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}
 
 //Tive que passar quatro parametros para que possa se conectar ao banco de dados, pois apenas dois estava dando erro
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);//realizar algumas validações e é contra hackers
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



 
$query ="select*from motorista where usuario = '{$usuario}' and senha = md5('{$senha}') and cpf = '{$cpf}' and email = '{$email}';"; //para achar o usuario e a senha correta no banco de dados
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result); //Para saber se está certo ou errado (1 ou 0)
 
if($row == 1) { //caso seja 1 está tudo correto e irá entrar no sistema (pagina do cliente)
	$_SESSION['usuario'] = $usuario;
	header('Location: exibir2.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>