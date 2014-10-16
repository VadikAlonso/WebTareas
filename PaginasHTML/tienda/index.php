<?php 
  if(!isset($_SESSION)){
    session_start();
  }

?>

<!DOCTYPE html>
<!--
Página "final" para web, aún en construcción

<img src="img/spite.jpg" width="100" height="100">
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
        
       <ul class="nav navbar-nav navbar-right">
        <li><a href="php/crea.php">Create an account</a></li>
        
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
        <!-- Modificaremos los botones -->
        <?php  
          if (isset($_SESSION)) {
        ?>
        
      <form class="navbar-form navbar-left" role="search" name="form1" method="post" action='php/validaform.php'>
        <div class="form-group">
          <input name="usuario" type="text" class="form-control" placeholder="User~Name">
          <input name="contra" type="password" class="form-control" placeholder="Password">
          <input type="hidden" name="priv" value="1">
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
          include ("php/footer.php"); //Barra es el php con la nav

        ?>
        
        
    </body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</html>
