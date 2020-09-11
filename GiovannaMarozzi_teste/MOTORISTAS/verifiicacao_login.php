<?php //Se a sessão do usuario existir irá para a pagina certa, caso contrario não

if (!$_SESSION['usuario']){
	header('Location: index.php');
	exit(); //Se ninguem tiver feito pelomenos um login nao irá etrar na pagina do usuario;
}
?>