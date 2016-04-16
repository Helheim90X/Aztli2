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
        <a class="item white" href="#">Agregar Lugar</a>
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
              <a href="index.php" class="ui left header item">
                <h1 class="ui header">Disfrutando Puebla</h1>
              </a>
              <div class="right item">
                <a class="item teal" href="index3.php">Inicio</a>
                <a class="item teal" href="lugares3.php">Lugares</a>
                <!--<a class="item active teal" href="buscar3.php">Buscar</a>-->
                <a class="item teal" href="#">Agregar Lugar</a>
                <a class="item teal" href="#">Comentarios</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
   <div class="ui center aligned container">
        
        <?PHP
$dat=$_REQUEST['Buscar'];
$cri=$_REQUEST['gen'];
echo "<br><h2 class='ui teal header'>Lugares relacionados con $cri: $dat</h2><br>";
        

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"disfrutandopuebla");
$result=mysqli_query($link,"select * from lugar where $cri like '%$dat%'");
if($row=mysqli_fetch_array($result)){
    echo"<h3 class='ui header'>
            <div class='content'>
            Dale clic en el nombre del lugar para tener la informacion completa
            </div>
        </h3>";
    echo"<table class='ui celled padded table'>
  <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Categoria</th>
    <th>Ubicacion</th>
    <th>Foto</th>
  </tr></thead>
  <tbody>";
   do{
      echo"<tr>";
			$id=$row['id_lugar'];
			$no=$row['nombre'];			
			$ca=$row['categoria'];
			$fo=$row['foto'];
			$ub=$row['ubicacion'];
            echo"<td class='single line'>$id</td>";
			echo"<td><a href='descripcion3.php?idp=$id'><h2 class='ui header'>$no</h2></a></td>";
            echo"<td class='single line'>$ca</td>";
            $t = utf8_encode($ub);
            echo"<td class='single line'>$t</td>";
            echo"<td><img class='ui centered tiny rounded image' src='MisImagenes/$fo'/></td>";
            echo"</tr>";
   }while($row=mysqli_fetch_array($result));
    echo"</tbody></table>";
}
else
   echo "<h3 class='ui header'>No hay datos</h3>";

mysqli_close($link);
?>
        
    </div>

</body>
</html>