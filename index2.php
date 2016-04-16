<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Aztli</title>
  <meta name="Title" content="Disfrutando Puebla">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
  <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="js/semantic.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<?php session_start();
if (!isset($_SESSION['user']) || $_SESSION['tipo']!=0)
header("Location:index.php");
?>
    
<navbar id="top" class="ui menu inverted teal text-small">
      <div class="right menu">
        <a class="item" href="perfil.php">Bienvenid@: <?php echo $_SESSION['user'];?></a>
        <a class="item" href="contacto2.php">Contacto</a>
      </div>
</navbar>

<!-- Menu lateral -->
      <div class="ui vertical inverted teal sidebar menu left">
        <a class="item white" href="index2.php">Inicio</a>
        <a class="item white" href="lugares2.php">Lugares</a>
        <a class="item white" href="insertar.php">Agregar Lugar</a>
        <a class="item white" href="salir.php">Cerrar Sesión</a>
      </div>

<!-- Menu principal -->
        <div class="ui vertical masthead center aligned segment">

          <div class="ui container">
            <div class="ui large secondary menu" id="menu_desplegable">
              <a class="toc item">
                <i class="sidebar icon"></i>
              </a>
                <img class="ui mini image" src="images/logo.png">
              <a href="index.php" class="ui left header item"> 
                  ¡Bienvenido!
              </a>
              <div class="right item">
                <a class="item active teal" href="index2.php">Inicio</a>
                <a class="item teal" href="lugares2.php">Lugares</a>
                <a class="item teal" href="insertar.php">Agregar Lugar</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui center aligned container">
        <br>
    <div class="column">     
      
    <form class="ui large form" action="resultado2.php" method="post" enctype="multipart/form-data">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="help icon"></i>
            <input type="text" name="Buscar" placeholder="Busca el lugar aqui" required>
          </div>
        </div>
          
  <div class="inline fields">
    <label for="lugar">Buscar por:</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gen" value="nombre">
        <label>Nombre</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gen" value="categoria">
        <label>Categoria</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="gen" value="ubicacion">
        <label>Ubicación</label>
      </div>
    </div>
  </div>
          
        <button class="ui fluid teal button" type="submit">Buscar</button>
      </div>
    </form>

  </div>
            <div class="column center aligned">
                     <div class="ui shape">
                         <div class="sides">
                             <div class="four side">
                                 <img class="ui fluid image" src="images/puebla-street.jpg" id="imagen4">
                             </div>
                             <div class="third side">
                                 <img class="ui fluid image" src="images/546e2a1d32b88.jpg" id="imagen3">
                             </div>
                             <div class="second side">
                                 <img class="ui fluid image" src="images/photoEscudo_PUE_ip_Cholula_headercholulaPbla.jpg" id="imagen2">
                             </div>
                             <div class="active first side">
                                 <img class="ui fluid image" src="images/Catedral-de-Puebla.jpg" id="imagen1">
                             </div>
                         </div>
                     </div>
                     <div class="ui ignored hidden divider"></div>
                     <div class="ui ignored icon direction buttons">
                         <div data-direction="over" data-animation="flip" title="Anterior" class="ui button" data-shape="square"><i class="arrow left icon"></i></div>
                         <div data-direction="back" data-animation="flip" title="Siguiente" class="ui button" data-shape="square"><i class="arrow right icon"></i></div>
                     </div>


                 </div>
    </div>

</body>
</html>