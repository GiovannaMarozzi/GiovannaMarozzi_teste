<?php 
define('HOST', 'localhost');
define('NOME', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, NOME, SENHA, DB) or die('Não foi possível conectar');
?>