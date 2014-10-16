<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
  session_start();

  }
  //para terminar sesion ->> session_destroy()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <link rel="stylesheet" href="./../css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/micss.css">
	<meta charset="UTF-8">
	<title>Virtual Land</title>
</head>
<body>

	<?php 
		$numero=2;  //2 para que no muestre el valido de 1 ni el no valido de 0
	?>

	<?php
		include ("barra.php"); //Barra es el php con la nav

	?>


	<form role="form" method="post" action='modifica.php'>

  <div class="form-group">

    <!-- Para que ingrese su contraseña actual y verifique si es el usuario, para poder modificar la cuenta -->

    <label for="InputUser">Current Password:</label>
    <input name="current" type="password" class="form-control" id="InputCurrent" placeholder="Password">

  <br>
    <label for="InputUser">User Name can't be changed.</label><br>
  <br>

    <label for="InputPassword">New Password:</label>
    <input name="pass" type="password" class="form-control" id="InputPassword" placeholder="New Password">
  <br>

    <label for="InputEmail">Can't modify Email address yet... Sorry :/ </label>
    <!--input name="mail" type="email" class="form-control" id="InputEmail" placeholder="Enter email"-->
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>


</body>

</html>