<?php
session_start();
include ("conexao.php");

$consulta = "SELECT * FROM corridas"; 
$con = $conexao->query($consulta) or die ($conexao->error);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Olá</title>
</head>
<body>
	<table border="3">
		<tr>
			<td>Nome-Motorista</td>
			<td>Nome-Passageiro</td>
			<td>Valor</td>
		</tr>
		<?php while ($dado = $con->fetch_array()){
		?>
		<tr>
			<td><?php echo $dado["nome_motorista"]; ?></td>
			<td><?php echo $dado["nome_passageiro"]; ?></td>
			<td><?php echo $dado["valor_corrida"]; ?></td>
		</tr>
			<?php }?>

			<form action="exibir2.php"><input type="submit" name="atualizar" value="Atualizar"></form>


	</table>
</body>
</html>