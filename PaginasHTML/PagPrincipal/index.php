<!DOCTYPE html>
<!--
Página "final" para web, aún en construcción

<img src="img/spite.jpg" width="100" height="100">
-->
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/micss.css">
        <title>Virtual Land</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
          include ("php/barra.php"); //Barra es el php con la nav

        ?>
         
        <!-- Carousel -->
        <div id="contenedor-carousel">
            
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img width="100%" src="img/ORAS.png" alt="...">
      <div class="carousel-caption">
          <a href="#" class="diagonal"> Pokemon Omega Ruby & Alpha Sapphire</a>
      </div>
      On sale November 21
    </div>
    <div class="item">
        <img width="100%" src="img/destiny.jpg" alt="...">
      <div class="carousel-caption">
          <a href="#" class="diagonal"> Recive a collection figure, just pre-order it  </a>
      </div>
      Pre order with $10 !
    </div>
    <div class="item">
        <img width="100%" src="img/infamous.jpg" alt="...">
      <div class="carousel-caption">
          <a href="#" class="diagonal"> Get it now! </a>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
            </div>
        
        <footer>
            <div id="footer">
                <div class="container">
                <p class="text-muted credit">Virtual Land ||<a href="#"> Vadik</a>.</p>
                </div>
            </div>
        </footer>
        
    </body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</html>
