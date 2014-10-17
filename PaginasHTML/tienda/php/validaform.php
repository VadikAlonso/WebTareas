<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}
	//para terminar sesion ->> session_destroy()
?>

<?php
/*no se puede acceder a esta pagina directamente en la URL solo se entra por medio de post

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
	//isset() es para ver si existe */

	require_once 'connect.php'; //Linea para llamar a connect

	$user = $_POST['usuario'];
	$pass = $_POST['contra'];

if ($user!="") {

	$consulta = "SELECT * FROM usuarios WHERE user='".$user."' AND pass='".$pass."'";

	if (mysqli_fetch_assoc($conexion->query($consulta))) {
		$_SESSION['usuario'] = $user;

		$_SESSION['entra']=1;

		//header("Location: inok.php");
	}else{
		$_SESSION['entra']=0;
		//header("Location: inbad.php"); //redirigue a esta otra pag si no
	}
}
	header("Location: ./../index.php");

?>