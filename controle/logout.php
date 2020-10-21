<?php
//Botão logout, starta a sessao, apaga as variaveis nome e nivel e redireciona para index.
		session_start();
		unset($_SESSION['loginUsuario']);
		unset($_SESSION['nivelUsuario']);
		header('location:../index.php');
?>