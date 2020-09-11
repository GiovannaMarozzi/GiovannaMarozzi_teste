<?php 
session_start();
include("verifiicacao_login.php");

?>
<h2><?php echo $_SESSION['usuario'];  ?></h2>
<h3><a href="logout.php">Sair</a></h3>