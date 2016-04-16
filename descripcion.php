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
                <a class="item active teal" href="lugares.php">Lugares</a>
                <!--<a class="item teal" href="buscar.php">Buscar</a>-->
                <a class="item teal" href="login.php">Iniciar Sesión</a>
                <a class="item teal" href="registro.php">Regístrate</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui raised very padded text container segment">
        <?PHP
	$idp=$_GET['idl'];
	$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");
	$resultado=mysqli_query($link,"select * from lugar where id_lugar='$idp'");
    while($row=mysqli_fetch_array($resultado))
		{
                $no=$row['nombre'];
                $ca=$row['categoria'];
                $fo=$row['foto'];
                $ub=$row['ubicacion'];
                $sw=$row['sitioweb'];
                $ha=$row['horario_abre'];
                $hc=$row['horario_cierra'];
                echo "<h2 class='ui teal header'>$no</h2>";
                echo "Categoria: $ca<br><br>";
                echo "<img class='ui medium rounded centered image' src='MisImagenes/$fo'/><br>";
                echo "Horario de: $ha a $hc<br><br>";
                $t = utf8_encode($ub);
                echo "Ubicacion: $t<br><br>";
		}
    mysqli_close($link);
?>
        <h3 class='ui teal header'>Comentarios del lugar:</h3>
        <table class="ui selectable celled padded table">
  <thead>
    <tr>
    <th>Mensaje</th>
  </tr></thead>
  <tbody>
      
     <?php
        $link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"disfrutandopuebla");
		$resultado=mysqli_query($link,"select * from comentario where id_lugar='$idp' and aprobado=1");
		while($row=mysqli_fetch_array($resultado))
		{
			$me=$row['mensaje'];
            $t = utf8_encode($me);
            echo"<td class='single line'>$t</td>";
            echo"</tr>";
		}
		mysqli_close($link);
	?>

            
  </tbody>
</table>
    </div>

</body>
</html>