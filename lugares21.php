<!doctype html>
<?php 
    header('Content-Type: text/html; charset=UTF-8'); 
?>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
       <!-- <a class="item white" href="buscar2.php">Buscar</a>-->
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
                <a class="item teal" href="index2.php">Inicio</a>
                <a class="item active teal" href="lugares2.php">Lugares</a>
                <!--<a class="item teal" href="buscar2.php">Buscar</a>-->
                <a class="item teal" href="insertar.php">Agregar Lugar</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui center aligned container">
        <br><h2 class="ui teal header">
            <?php $cat=$_GET['cat'];
            echo"<div class='content'>
            $cat
            </div>";
        ?>
        </h2>
 
        <h3 class="ui header">
            <div class="content">
            Dale clic en el nombre del lugar para tener la informacion completa
            </div>
        </h3>
        
        <table class="ui selectable celled padded table">
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Ubicacion</th>
    <th>Foto</th>
  </tr></thead>
  <tbody>
      
     <?php
        $cat=$_GET['cat'];
        $link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"disfrutandopuebla");
		$resultado=mysqli_query($link,"select * from lugar where categoria='$cat'");
		while($row=mysqli_fetch_array($resultado))
		{
            echo"<tr>";
			$id=$row['id_lugar'];
			$no=$row['nombre'];			
			$fo=$row['foto'];
			$ub=$row['ubicacion'];
            echo"<td class='single line'>$id</td>";
			echo"<td><a href='descripcion2.php?idl=$id'><h2 class='ui header'>$no</h2></a></td>";
            $t = utf8_encode($ub);
            echo"<td class='single line'>$t</td>";
            echo"<td><img class='ui centered tiny rounded image' src='MisImagenes/$fo'/></td>";
            echo"</tr>";
		}
		mysqli_close($link);
	?>

            
  </tbody>
</table>
    </div>

</body>
</html>