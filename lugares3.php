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
<navbar id="top" class="ui menu inverted teal text-small">
      <div class="right menu">
      </div>
</navbar>

<!-- Menu lateral -->
      <div class="ui vertical inverted teal sidebar menu left">
        <a class="item white" href="index3.php">Inicio</a>
        <a class="item white" href="lugares3.php">Lugares</a>
        <!--<a class="item white" href="buscar3.php">Buscar</a>-->
        <a class="item white" href="insertar2.php">Agregar Lugar</a>
        <a class="item white" href="#">Comentarios</a>
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
                <a class="item teal" href="index3.php">Inicio</a>
                <a class="item active teal" href="lugares3.php">Lugares</a>
                <!--<a class="item teal" href="buscar3.php">Buscar</a>-->
                <a class="item teal" href="insertar2.php">Agregar Lugar</a>
                <a class="item teal" href="#">Comentarios</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui center aligned container">
        <br><h2 class="ui teal header">
            <div class="content">
            Categorias de Lugares
            </div>
        </h2>
 <div class="ui four column doubling stackable grid container">
  <div class="column">
      <a href="lugares31.php?cat=Cultura"><i class="blue massive book icon"></i></a>
    <h4>Cultura</h4>
  </div>
  <div class="column">
      <a href="lugares31.php?cat=Restaurante"><i class="blue massive food icon"></i></a>
    <h4>Alimentos</h4>
  </div>
  <div class="column">
      <a href="lugares31.php?cat=Bar"><i class="blue massive bar icon"></i></a>
    <h4>Bares</h4>
  </div>
  <div class="column">
    <a href="lugares31.php?cat=Entretenimiento"><i class="blue massive film icon"></i></a>
    <h4>Entrenimiento</h4>
  </div>
</div>
<div class="ui four column doubling stackable grid container">
  <div class="column">
      <a href="lugares31.php?cat=Parque"><i class="blue massive tree icon"></i></a>
    <h4>Parques</h4>
  </div>
  <div class="column">
      <a href="lugares31.php?cat=Hotel"><i class="blue massive h icon"></i></a>
    <h4>Hoteles</h4>
  </div>
  <div class="column">
      <a href="lugares31.php?cat=Cafeteria"><i class="blue massive coffee icon"></i></a>
    <h4>Cafeterias</h4>
  </div>
  <div class="column">
      <a href="lugares31.php?cat=Club Nocturno"><i class="blue massive cocktail icon"></i></a>
    <h4>Clubes Nocturnos</h4>
  </div>
</div>
<div class="ui four column doubling stackable grid container">
  <div class="column">
      <a href="lugares31.php?cat=Monumento"><i class="blue massive university icon"></i></a>
    <h4>Monumentos</h4><br>
    </div>
</div>

    </div>

</body>
</html>