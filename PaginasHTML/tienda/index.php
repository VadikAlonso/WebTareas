<?php 
  if(!isset($_SESSION)){ //si no hay una sesión
    session_start();  
    $_SESSION['entra']=2; //2 es que acaba de abrir el html, 0 que se logeo mal y 1 que está bien logeado
    $_SESSION['error']=2;
  }

?>

<!DOCTYPE html>
<!--
Página "final" para web, aún en construcción
-->
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/micss.css">
        <title>Virtual Land</title>
        <meta charset="UTF-8">
    </head>
    <body>


        <nav class="navbar navbar-default" role="navigation">
  <div class="jumbotron">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <div>
            <img src="img/spite.jpg" width="120" height="100" >
        </div>
        <a class="navbar-brand" href="#">Virtual<br>  Land</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sony <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Consoles</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Best Sellers</a></li>
            <li class="divider"></li>
            <li><a href="#">Puzzle & Cards</a></li>
            <li><a href="#">Shooter</a></li>
            <li><a href="#">Strategy</a></li>
            <li><a href="#">Fighting</a></li>
            <li class="divider"></li>
            <li><a href="#">By Price</a></li>
            <li><a href="#">By ESRB</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nintendo <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Consoles</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Best Sellers</a></li>
            <li class="divider"></li>
            <li><a href="#">Puzzle & Cards</a></li>
            <li><a href="#">Shooter</a></li>
            <li><a href="#">Strategy</a></li>
            <li><a href="#">Fighting</a></li>
            <li class="divider"></li>
            <li><a href="#">By Price</a></li>
            <li><a href="#">By ESRB</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Microsoft <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Consoles</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Best Sellers</a></li>
            <li class="divider"></li>
            <li><a href="#">Puzzle & Cards</a></li>
            <li><a href="#">Shooter</a></li>
            <li><a href="#">Strategy</a></li>
            <li><a href="#">Fighting</a></li>
            <li class="divider"></li>
            <li><a href="#">By Price</a></li>
            <li><a href="#">By ESRB</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Plataforms<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Consoles</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Best Sellers</a></li>
            <li class="divider"></li>
            <li><a href="#">Puzzle & Cards</a></li>
            <li><a href="#">Shooter</a></li>
            <li><a href="#">Strategy</a></li>
            <li><a href="#">Fighting</a></li>
            <li class="divider"></li>
            <li><a href="#">By Price</a></li>
            <li><a href="#">By ESRB</a></li>
          </ul>
        </li>

        <?php 
          if (isset($_SESSION['usuario'])) {
        ?>
        <li><a data-toggle="modal" data-target="#ventanaSet">Set my Account </a>

          <div class="modal fade" id="ventanaSet" tabindex="-1" role="search" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4>Set your Account<br>At this moment you can change only you password</h4>
                </div>

                <form role="form" method="post" action='php/modifica.php'>

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

                    <button type="submit" class="btn btn-info">Submit</button>

                    </form>

              </div>
            </div>
          </div>

        </li>


        <?php 
          }
        ?>
        
       <ul class="nav navbar-nav navbar-right">

        <?php //Acá sale ventana para crear cuenta
          if (!isset($_SESSION['usuario'])) {
        ?>

        <li><a data-toggle="modal" data-target="#ventana">Create an account</a>

          <div class="modal fade" id="ventana" tabindex="-1" role="search" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4>Creating you account.<br>Insert the next info.</h4>
                </div>

                <form role="form" method="post" action='php/registro.php'>

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

                  <button type="submit" class="btn btn-info" >Submit</button>

                </form>

              </div>
            </div>
          </div>

        </li>

        <?php 
          }else{
        ?>
          <li>
          <a href="php/loggout.php">Logg out!</a>
          </li>
        <?php } ?>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Branches <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Find us!</a></li>
            <li><a href="#">Common questions</a></li>
            <li><a href="#">Looking for work?</a></li>
            <li class="divider"></li>
            <li><a href="#">You can cry here!<br>Complain about us...</a></li>
          </ul>
        </li>
      </ul>
        
      </ul>

      <div>

      <?php  
          if (isset($_SESSION['usuario'])) {
        ?>

      <h3>... 
        <span class="label label-default">
        <?php 
          echo "Wellcome ".$_SESSION['usuario']." !";
        ?>
        </span>
      </h3>



      <?php } ?>

      </div>

        <!-- Modificaremos los botones -->
        <?php  
          if (!isset($_SESSION['usuario'])) {

        ?>

      <?php 
        if ($_SESSION['entra']==0) {
        ?>
      <h3>... 
        <span class="label label-default">
        <?php 
          echo "Try Loggin Again !";
        ?>
        </span>
      </h3>
      <?php } ?>
        
      <form class="navbar-form navbar-left" role="search" name="form1" method="post" action='php/validaform.php'>
        <div class="form-group">
          <input name="usuario" type="text" class="form-control" placeholder="User~Name">
          <input name="contra" type="password" class="form-control" placeholder="Password">
          <!--input type="hidden" name="priv" value="1"-->
        </div>
        <button type="submit" class="btn btn-default">Connect!</button>
      </form>
       
       <?php } ?>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Title ">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         
        <?php
          include ("php/carousel.php"); //Barra es el php con la nav

        ?>



        <?php
          include ("php/cuadros.php"); //Barra es el php con los cuadros de ventas

        ?>

        <?php
          include ("php/footer.php"); //Barra es el php con la nav

        ?>

        <?php 
        if ($_SESSION['error']==1) {
          echo '<script type="text/javascript">alert("Error in your last move, try again");</script>"';
         }else{if ($_SESSION['error']==0) {
            $_SESSION['error']=2; //Para que no muestre nada
            echo '<script type="text/javascript">alert("Successful changes");</script>"';
            }
         }
        ?>
        
    </body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</html>
