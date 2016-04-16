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
                <h1 class="ui header">aztli</h1>
              </a>
              <div class="right item">
                <a class="item teal" href="index.php">Inicio</a>
                <a class="item teal" href="lugares.php">Lugares</a>
                <a class="item teal" href="buscar.php">Buscar</a>
                <a class="item teal" href="login.php">Iniciar Sesión</a>
                <a class="item active teal" href="registro.php">Regístrate</a>
              </div>
            </div>
          </div>
      </div>
<div class="ui raised very padded text container segment">
<?php
session_start();
$no=$_REQUEST['name'];
$em=$_REQUEST['correo'];
$co=$_REQUEST['password'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"disfrutandopuebla");
$result=mysqli_query($link,"select * from usuario where nombre='$no'");
if($row=mysqli_fetch_array($result)){
   echo "<h3 class='ui header'>Ya existe un usuario con ese nombre</h3>
   <div class='ui message'>
      Intenta de nuevo <a href='registro.php'>aqui</a>
    </div>";
}else{
  $result1=mysqli_query($link,"select * from usuario where correo='$em'");
  if($row=mysqli_fetch_array($result1)){
   echo "<h3 class='ui header'>Ya existe un usuario con ese correo electronico</h3>
   <div class='ui message'>
      Intenta de nuevo <a href='registro.php'>aqui</a>
    </div>";
  }else{
    $res=mysqli_query($link,"insert into usuario(nombre,correo,password) values('$no','$em','$co')");
    echo "<h3 class='ui header'>Usuario creado correctamente</h3>
   <div class='ui message'>
      Iniciar sesion <a href='login.php'>aqui</a>
    </div>";
  }}
mysqli_close($link);
?>
</div>
</body>
</html>