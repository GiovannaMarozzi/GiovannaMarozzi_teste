<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf'])) ;
$dtnascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from passageiro where cpf = '$cpf';"; //Verificação para saber se o usuario já está cadastrado
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO passageiro(usuario, cpf, data_nascimento, email, sexo, senha) VALUES ('$nome', '$cpf', '$dtnascimento', '$email', '$sexo', '$senha')";

if ($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;



?>