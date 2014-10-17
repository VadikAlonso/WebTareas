<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}

require_once 'connect.php'; //Linea para llamar a connect

	$newpass = $_POST['pass'];		//Para la nueva contraseña
	$pass = $_POST['current'];  	//Para validar que es su cuenta

	$consulta = "SELECT * FROM usuarios WHERE user='".$_SESSION['usuario']."' AND pass='".$pass."'";  //Usamos el nombre de usuario de la seción

	$otraConsulta = "UPDATE usuarios SET pass='".$newpass."' WHERE user='".$_SESSION['usuario']."'"; 	//Consulta para cambiar la contraseña

	if (mysqli_fetch_assoc($conexion->query($consulta))) {

		$conexion->query($otraConsulta);

		//header("Location: ./../index.php");
		$_SESSION['error']=0;
	}else{
		$_SESSION['error']=1;
		//header("Location: ./../index.php");
	}

	header("Location: ./../index.php");

?>