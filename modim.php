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
if (!isset($_SESSION['user']) || $_SESSION['tipo']!=1)
header("Location:index.php");
?>

<navbar id="top" class="ui menu inverted teal text-small">
      <div class="right menu">
          <a class="item">Bienvenid@: <?php echo $_SESSION['user'];?></a>
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
    
    <div class="ui raised very padded text container segment">
        <h2 class='ui teal header'>Modificar imagen</h2>
        
    <?PHP
            $idp=$_GET['idl'];
            echo"<a href='descripcion3.php?idl=$idp'><button class='ui icon button'>
            Cancelar
            <i class='remove icon'></i>
            </button></a>";
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"disfrutandopuebla");
            $resultado=mysqli_query($link,"select * from lugar where id_lugar='$idp'");
            while($row=mysqli_fetch_array($resultado))
                {
                        $no=$row['nombre'];
                        $fo=$row['foto'];
                        echo "<h4>$no</h4>";
                        echo "<img class='ui medium rounded centered image' src='MisImagenes/$fo'/><br>";
		        }
              
        echo"<form action='modim1.php' method='post' enctype='multipart/form-data' class='ui form segment'>
            <div class='field'>
                <div class='ui left icon input'>
                <i class='photo icon'></i>
                <input type='file' name='foto'>
                </div>
            </div>
            <input type='Hidden' name='idl' value=$idp>
            <div class='ui fluid large teal submit button'>Guardar Cambios</div>
            <div class='ui error message'></div>
        </form>";
            mysqli_close($link);
?>
    </div>

</body>
</html>