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
        <a class="item white" href="comentario.php">Comentarios</a>
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
                <a class="item teal" href="comentario.php">Comentarios</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
    
    <div class="ui raised very padded text container segment">
     <?PHP
        $idp=$_GET['idl'];
        echo"<button class='ui icon button'>
            <a href='modificar.php?idl=$idp'><i class='edit icon'></i></a>
        </button>
        <button class='ui icon button'>
            <a href='eliminar.php?idl=$idp'><i class='trash outline icon'></i></a>
        </button>";
            
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
                echo"<a href='modim.php?idl=$idp'><button class='ui icon button'>
                Cambiar imagen
                <i class='photo icon'></i>
                </button></a>";
                echo "<img class='ui medium rounded centered image' src='MisImagenes/$fo'/><br>";
                echo "Horario de: $ha a $hc<br><br>";
                $t = utf8_encode($ub);
                echo "Ubicacion: $t<br><br>";
                echo "Sitio Web: $sw<br><br>";
		}
?>
        
<form class="ui large form" action="insertarc.php" method="post" enctype="multipart/form-data">
  <div class="field">
    <label><h4>Añade tu comentario de este lugar aqui:</h4></label>
    <textarea rows="3" placeholder="Este lugar me parece ..." name="msj"></textarea>
  </div>
    <?php 
    $idu=$_SESSION['id'];
    
    echo"<input type='Hidden' name='idu' value=$idu>";
    echo"<input type='Hidden' name='idl' value=$idl>";
    mysqli_close($link);
    ?>
  <div class="ui message">
      Tu comentario aparecera una vez que nuestros administradores lo aprueben
  </div>
  <button class="ui teal button" type="submit">Comentar</button>
</form>
        
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
		$resultado=mysqli_query($link,"select * from comentario where id_lugar='$idl' and aprobado=1");
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