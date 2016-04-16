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

<navbar id="top" class="ui menu inverted teal text-small">
      <div class="right menu">
        <a class="item" href="contacto.php">Contacto</a>
      </div>
</navbar>

<!-- Menu lateral -->
      <div class="ui vertical inverted teal sidebar menu left">
        <a class="item white" href="index.php">Inicio</a>
        <a class="item white" href="lugares.php">Lugares</a>
        <a class="item white" href="buscar.php">Buscar</a>
        <a class="item white" href="login.php">Iniciar Sesión</a>
        <a class="item white" href="registro.php">Regístrate</a>
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
                <a class="item teal" href="index.php">Inicio</a>
                <a class="item teal" href="lugares.php">Lugares</a>
                <a class="item active teal" href="buscar.php">Buscar</a>
                <a class="item teal" href="login.php">Iniciar Sesión</a>
                <a class="item teal" href="registro.php">Regístrate</a>
              </div>
            </div>
          </div>
      </div>
    
<div class="ui raised very padded text container segment">   
  <div class="column">
    <h2 class="ui teal header">
      <div class="content">
        Busca el lugar aqui
      </div>
    </h2>      
      
    <form class="ui large form" action="resultado.php" method="post" enctype="multipart/form-data">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="help icon"></i>
            <input type="text" name="Buscar" placeholder="Ingrese su busqueda" required>
          </div>
        </div>
          
  <div class="inline fields">
    <label for="fruit">Buscar por:</label>
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
</div>

</body>
</html>