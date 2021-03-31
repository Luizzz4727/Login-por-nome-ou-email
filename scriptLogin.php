<?php
/*
	Name: scriptLogin.php
	Author: luiz.ribeiro
	Date: 31/03/21 10:23 
	Description: Script que faz funcionar todo o sistema de Login.
*/
session_start();

require_once('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];
if($login == '' || $senha == ''){

		echo "<script type='text/javascript'>alert('Existem campos vazios'); window.location.href='index.php';</script>";

} else {
	$query = $conn->prepare("SELECT * FROM TB_Usuario WHERE Nm_Usuario = '$login' OR Ds_EmailUsuario = '$login' ");

	$query->execute();

	$nmLinhas = $query->rowCount();

	if($nmLinhas === 1){
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)) {
			$senhaUsuario = $dados['Pw_Usuario'];
			$loginNome = $dados['Nm_Usuario'];
			$loginEmail = $dados['Ds_EmailUsuario'];		
		}

		if ($senha != $senhaUsuario){
			
				echo "<script text='text/javascript'>alert('Senha está incorreta!'); window.location.href='index.php';</script>";

		} else {
			$_SESSION['On'] = true;
			$_SESSION['NomeUsuario'] = $loginNome;
			$_SESSION['EmailUsuario'] = $loginEmail;
			header("Location: perfil.php");

		}
		
	} else {

		session_destroy();
		echo "<script type='text/javascript'>alert('Nome e Email não existem!'); window.location.href='index.php';</script>";


	}

}


?>