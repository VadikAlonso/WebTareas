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
            <img src="./../img/spite.jpg" width="120" height="100" >
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
        <?php 
          if ($numero==1) {
        ?>
        <li><a href="setaccount.php">Set my account </a></li>
        <?php 
          }
        ?>

        <?php 
          if ($numero==2) {
        ?>
        <li><a href="./../index.php">Return to main page </a></li>
        <?php 
          }
        ?>
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

      <?php 
        if ($numero==1) {
      ?>

      <h3>    
        <span class="label label-default">
        <?php 
          echo "Wellcome ".$_SESSION['usuario']." !";
        ?>
        </span>
      </h3>

      <?php 
        }
      ?>

      <?php 
        if ($numero==0) {
      ?>

      <h3>  |  
        <span class="label label-default"><a href="#" style="color:whitesmoke;">Make an account!</a></span> | 
        <span class="label label-default"><a href="#" style="color:whitesmoke;">Try again</a></span>
      </h3>


      <?php 
        }
      ?>
       
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Title ">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

