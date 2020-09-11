<?php
session_start();
include('conexao.php');
include('verificacao_login.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}
 
 //Tive que passar quatro parametros para que possa se conectar ao banco de dados, pois apenas dois estava dando erro
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query ="select*from passageiro where email = '{$email}' and senha = md5('{$senha}');"; //para achar o email e a senha correta no banco de dados
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result); //Para saber se está certo ou errado (1 ou 0)
 
if($row == 1) { //caso seja 1 está tudo correto e irá entrar no sistema (pagina do cliente)
	$_SESSION['email'] = $email;
	header('Location: exibir2.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>