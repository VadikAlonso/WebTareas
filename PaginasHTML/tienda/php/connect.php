<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}
	//para terminar sesion ->> session_destroy()
?>

<?php 
	define("DB_USER","root");
	define("DB_PASSWORD","");
	define("DB_BASE","tienda");
	define("DB_SERVER","localhost");

	$conexion = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_BASE);
 ?>