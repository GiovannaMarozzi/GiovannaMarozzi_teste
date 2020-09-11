<?php 
 // include('conexao.php');
 include('usuario.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dtnascimento = $_POST['data_de_nascimento'];
$email = $_POST['email'];
$carro = $_POST['carros'];
$status = $_POST['status'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];
$nsenha = $_POST['nsenha'];

$conexao2 = mysqli_connect('localhost', 'root', '', 'valemobi') or die('Erro ao conectar!'); //caso o outro não ente
$sql = "INSERT INTO usuario VALUES";
$sql .="('$nome', '$cpf', '$dtnascimento', '$email', '$carro', '$status', '$sexo', '$senha')";//Variavel concatenada
mysqli_query($conexao2, $sql) or die('Erro ao tentar registrar!');
mysqli_close($conexao2);
echo "Cliente cadastrado com sucesso!";
 ?>