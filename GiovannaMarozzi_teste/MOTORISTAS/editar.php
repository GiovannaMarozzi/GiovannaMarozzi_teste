<?php 
include('conexao.php');
?>

<?php 

$selecionar = 'selecionar';
$usuario = 'usuario';
$status = 'status';

$novostatus = "select * from motorista where status = '{$status}';";




$res = mysqli_query($conexao, $novostatus);	
	
	if($novostatus){
		echo "Registro atualizado com sucesso";
	}else{
		echo "Erro na autualização";
	}
$novostatus = "UPDATE motorista	SET status = '{$selecionar}' WHERE usuario = {'$usuario'};";

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<a href="exibir2.php"><button>Voltar</button></a>
</body>
</html>
