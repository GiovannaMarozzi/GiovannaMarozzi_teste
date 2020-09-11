<?php 
session_start();
include("conexao.php");


$nome = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf'])) ;
$dtnascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$status = mysqli_real_escape_string($conexao, trim($_POST['status']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$carro = mysqli_real_escape_string($conexao, trim($_POST['carros']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from motorista where cpf = '$cpf'"; //Verificação para saber se o usuario já está cadastrado
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO motorista(usuario, cpf, data_de_nascimento, email, sexo, carro, status, senha) VALUES ('$nome', '$cpf', '$dtnascimento', '$email', '$sexo', '$carro', '$tipo_status', '$senha')";

if ($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;



?>