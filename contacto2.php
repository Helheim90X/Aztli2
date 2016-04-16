<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Disfrutando Puebla</title>
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
        <a class="item">Bienvenid@: <?php echo $_SESSION['user'];?></a>
        <a class="item" href="contacto2.php">Contacto</a>
      </div>
</navbar>

<!-- Menu lateral -->
      <div class="ui vertical inverted teal sidebar menu left">
        <a class="item white" href="index2.php">Inicio</a>
        <a class="item white" href="lugares2.php">Lugares</a>
        <!--<a class="item white" href="buscar2.php">Buscar</a>-->
        <a class="item white" href="#">Agregar Lugar</a>
        <a class="item white" href="salir.php">Cerrar Sesión</a>
      </div>

<!-- Menu principal -->
        <div class="ui vertical masthead center aligned segment">

          <div class="ui container">
            <div class="ui large secondary menu" id="menu_desplegable">
              <a class="toc item">
                <i class="sidebar icon"></i>
              </a>
              <a href="index.php" class="ui left header item">
                <h1 class="ui header">Disfrutando Puebla</h1>
              </a>
              <div class="right item">
                <a class="item teal" href="index2.php">Inicio</a>
                <a class="item teal" href="lugares2.php">Lugares</a>
                <!--<a class="item teal" href="buscar2.php">Buscar</a>-->
                <a class="item teal" href="#">Agregar Lugar</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui raised very padded text container segment">
    <h2 class='ui teal header'>Contacto</h2>
    <br>Facultad de Ciencias de la Computación
 	<br>Av. San Claudio y 14 Sur
 	<br>Ciudad Universitaria
 	<br>C.P. 72570
 	<br>Puebla, Puebla. México.<br>
 	<br>Teléfono : +521 22 26 74 55 33
    <br>Redes Sociales de Jana:<br>
        
    <a href="https://www.facebook.com/Jana723">
        <button class="ui circular facebook icon button">
            <i class="facebook icon"></i>
        </button>
    </a>
    <a href="https://twitter.com/Jana_janita">
        <button class="ui circular twitter icon button">
            <i class="twitter icon"></i>
        </button>
    </a>
    <a href="http://jana-janita.tumblr.com">
        <button class="ui circular teal icon button">
            <i class="tumblr icon"></i>
        </button>
    </a>
    <a href="https://www.instagram.com/janaconj">
        <button class="ui circular brown icon button">
            <i class="instagram icon"></i>
        </button>
    </a>
    </div>

</body>
</html>