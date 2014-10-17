<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();
}
?>


<?php

	require_once 'connect.php';
	
	$registro_query = "INSERT INTO usuarios(user,pass,mail) VALUES(
	'".$_POST['user']."',
	'".$_POST['pass']."',
	'".$_POST['mail']."'
	)";

	$_SESSION['usuario']=$_POST['user'];
	// '".md5($_POST['pass'])."',  //Para pasar la contraseña encriptadaal leerla se tiene que usar tambiém
	$registro_object = $conexion->query($registro_query);
	
	//echo "usuario registrado";
	echo '<script type="text/javascript">alert("Account Done!");</script>"';
	$_SESSION['error']=2;
	header("Location: ./../index.php");

?>