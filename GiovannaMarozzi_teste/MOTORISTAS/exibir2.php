<?php
session_start();
include ("conexao.php");

$consulta = "SELECT * FROM motorista"; 
$con = $conexao->query($consulta) or die ($conexao->error);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Olá, <?php echo $_SESSION['usuario']; ?></title>
</head>
<body>
	<table border="3">
		<tr>
			<td>ID</td> 
			<td>Nome</td>
			<td>CPF</td>
			<td>Data de nascimento</td>
			<td>Sexo</td>
			<td>E-mail</td>
			<td>Carro</td>
			<td>Status</td>
			<td>Opção</td>
		</tr>
		<?php while ($dado = $con->fetch_array()){
		?>
		<tr>
			<td><?php echo $dado["usuario_id"]; ?></td>
			<td><?php echo $dado["usuario"]; ?></td>
			<td><?php echo $dado["cpf"]; ?></td>
			<td><?php echo $dado["data_de_nascimento"]; ?></td>
			<td><?php echo $dado["sexo"]; ?></td>
			<td><?php echo $dado["email"]; ?></td>
			<td><?php echo $dado["carro"]; ?></td>
			<td><?php echo $dado["status"]; ?></td>
			<td><form method="post" action="editar.php" >
				<select name="selecionar">
					<option>Selecione</option>
					<option>Ativo</option>
					<option>Inativo</option>
				</select>
				<input type="submit" name="editar" value="Editar"></form>
			</td>
		</tr>
			<?php }?>


			<form action="exibir2.php"><input type="submit" name="atualizar" value="Atualizar"></form>


	</table>
</body>
</html>