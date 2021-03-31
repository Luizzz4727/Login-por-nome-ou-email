<?php

	session_start();
	if($_SESSION['On'] == false){

		session_destroy();
		header("Location: index.html");

	} else {

		$nomeUsuario = $_SESSION['NomeUsuario'];
		$emailUsuario = $_SESSION['EmailUsuario'];

	}



?>
<!--
	Name: perfil.php
	Author: luiz.ribeiro
	Date: 31/03/21 10:25 
	Description: Página de perfil após o Login ser efetuado.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		
		<div class="box">
			
			<h2>Bem-Vindo!</h2>
			<p class="nomeUsuario"><?=$nomeUsuario?></p>
			<p class="emailUsuario"><?=$emailUsuario?></p>

			<a href="index.php"> Voltar</a>

		</div>

	</div>
</body>
</html>