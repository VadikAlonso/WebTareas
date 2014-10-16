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

	<form role="form" method="post" action='registro.php'>

  <div class="form-group">
    <label for="InputUser">User Name:</label>
    <input name="user" type="text" class="form-control" id="InputUser" placeholder="User">
  <br>
    <label for="InputPassword">Password:</label>
    <input name="pass" type="password" class="form-control" id="InputPassword" placeholder="Password">
  <br>
    <label for="InputEmail">Email address:</label>
    <input name="mail" type="email" class="form-control" id="InputEmail" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>


</body>

</html>