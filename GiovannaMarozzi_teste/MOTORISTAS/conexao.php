<?php 
define('HOST', '127.0.0.1');
define('NOME', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, NOME, SENHA, DB) or die('Não foi possível conectar');
?>