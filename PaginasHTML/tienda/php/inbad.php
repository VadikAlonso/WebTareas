<?php
//inicia la sesion y puedes usarla en todos los docs. debe estar en todos
if(!isset($_SESSION)){
	session_start();

	}
	//para terminar sesion ->> session_destroy()
?>

<html>
 <head>
        <link rel="stylesheet" href="./../css/bootstrap.css">
        <link rel="stylesheet" href="./../css/font-awesome.min.css">
        <link rel="stylesheet" href="./../css/micss.css">
        <title>Virtual Land</title>
        <meta charset="UTF-8">
    </head>

	<body>

		<?php 
		$numero=0;
		?>

		<?php
			include ("barra.php"); //Barra es el php con la nav

		?>
		<?php
          include ("carousel.php"); //Barra es el php con la nav

        ?>

        <?php
          include ("footer.php"); //Barra es el php con la nav

        ?>
	</body>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>