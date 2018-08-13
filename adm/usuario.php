<?php
session_start();
include_once("seguranca.php");
echo "Bem vindo usuário ".$_SESSION['usuarioNome'];
?>
<meta charset="utf-8">
<br />
<a href="sair.php">Sair</a>
