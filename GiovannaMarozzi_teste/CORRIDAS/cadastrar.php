<?php 
session_start();
include("conexao.php");


$nome_motorista = mysqli_real_escape_string($conexao, trim($_POST['nome_motorista']));
$nome_passageiro = mysqli_real_escape_string($conexao, trim($_POST['nome_passageiro']));
$valor_corrida = mysqli_real_escape_string($conexao, trim($_POST['valor_corrida']));

$sql = "select * from corridas where nome_motorista = '$nome_motorista' and nome_passageiro = '$nome_passageiro' and valor_corrida = '$valor_corrida';"; //Verificação para saber se já existe a corrida

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['corrida_existe'] = true;
	header('Location: cadastrar.php');
	exit;
}

$sql = "INSERT INTO corridas(nome_motorista, nome_passageiro, valor_corrida) VALUES ('$nome_motorista', '$nome_passageiro', '$valor_corrida')";

if ($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>