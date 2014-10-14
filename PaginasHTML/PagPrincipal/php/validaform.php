<?php
//no se ´puede acceder a esta pagina directamente en la URL solo se entra por medio de post

	if(isset($_POST["usuario"]) && $_POST["usuario"]!=""){	//que el nombre no este vacio
		if($_POST["usuario"]=="Vadik" && $_POST["contra"]=="1234") { //que sea Vadik el loggueado
				$nombre=$_POST["usuario"];	//al manejo de bases de datos da problemas las commillas, por eso se 
				$contrasenia=$_POST["contra"];	//usa una variable intermedia
		
				header("Location: inok.php");
				//funcion que redirige a donde le indicamos
		}else{
			header("Location: inbad.php"); //redirigue a esta otra pag si no
		}
	}
	else{
		header("Location: inbad.php"); //redirigue a esta otra pag si no
	}
	//isset() es para ver si existe
?>