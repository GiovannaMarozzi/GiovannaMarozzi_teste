<?php
session_start();
include ("conexao.php");

$consulta = "SELECT * FROM passageiro"; 
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
		</tr>
		<?php while ($dado = $con->fetch_array()){
		?>
		<tr>
			<td><?php echo $dado["id_passageiro"]; ?></td>
			<td><?php echo $dado["usuario"]; ?></td>
			<td><?php echo $dado["cpf"]; ?></td>
			<td><?php echo $dado["data_nascimento"]; ?></td>
			<td><?php echo $dado["sexo"]; ?></td>
            <td><?php echo $dado["email"]; ?></td>
		</tr>
			<?php }?>


			<form action="exibir2.php"><input type="submit" name="atualizar" value="Atualizar"></form>


	</table>
</body>
</html>