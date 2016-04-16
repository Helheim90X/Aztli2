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
        <a class="item" href="contacto.php">Contacto</a>
      </div>
</navbar>

<!-- Menu lateral -->
      <div class="ui vertical inverted teal sidebar menu left">
        <a class="item white" href="index.php">Inicio</a>
        <a class="item white" href="lugares.php">Lugares</a>
        <!--<a class="item white" href="buscar.php">Buscar</a>-->
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
              <img class="ui mini image" src="images/logo.png">
              <a href="index.php" class="ui left header item"> 
                  ¡Bienvenido!
              </a>
              <div class="right item">
                <a class="item teal" href="index.php">Inicio</a>
                <a class="item teal" href="lugares.php">Lugares</a>
                <!--<a class="item teal" href="buscar.php">Buscar</a>-->
                <a class="item teal" href="login.php">Iniciar Sesión</a>
                <a class="item active teal" href="registro.php">Regístrate</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui raised very padded text container segment">   
        <h2 class="ui teal header">
            <div class="content">
            Registrate Aqui
            </div>
        </h2>
        <form action="registro1.php" method="post" enctype="multipart/form-data" class="ui form segment">
        
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Nombre de Usuario">
          </div>
        </div>
            
        <div class="field">
            <div class="ui left icon input">
            <i class="at icon"></i>
            <input type="text" name="correo" placeholder="Correo electronico">
            </div>
         </div>
            
        <div class="two fields">
          <div class="field">
            <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Contraseña">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="pssword" placeholder="Confirma tu contraseña">
            </div>
          </div>
        </div>
        
        <div class="ui fluid large teal submit button">Registrar</div>
        <div class="ui error message"></div>
    </form>
</div>

</body>
</html>