<?php

if(isset($_SESSION['On'])){
	session_destroy();
}

?>
<!--
	Name: index.php
	Author: luiz.ribeiro
	Date: 30/03/21 21:18
	Description: Página inicial do projeto onde ficará os campos de Nome/Email e Senha para o Login ser efetuado.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<div class="box">
			<h2>Entrar</h2>

			<form method="post" action="scriptLogin.php" autocomplete="off" >
				
				<input type="text" name="login" placeholder="Nome ou Email" class="Digitar" />
				<input type="password" name="senha" placeholder="Senha" class="Digitar" />

				<input type="submit" name="Enviar" class="Enviar" />

			</form>
		</div>
	</div>
</body>
</html>