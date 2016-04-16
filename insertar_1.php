<html>
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
                <a class="item teal" href="lugares2.php">Lugares</a>
                <!--<a class="item teal" href="buscar2.php">Buscar</a>-->
                <a class="item active teal" href="insertar.php">Agregar Lugar</a>
                <a class="item teal" href="salir.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
      </div>
<div class="ui raised very padded text container segment">
<?PHP
    $lu=$_REQUEST['lugar'];
    $ub=$_REQUEST['ubicacion'];
    $ca=$_REQUEST['categoria'];
    $ha=$_REQUEST['horaapertura'];
    $hc=$_REQUEST['horacierre'];

    /*echo "Lugar=$lu <br>";
    echo "Ubicacion=$ub <br>";
    echo "Categoria=$ca <br>";*/
    $ta=$_FILES['foto']['size'];
    $tp=$_FILES['foto']['type'];
    $no=$_FILES['foto']['name'];
    /*echo "Nombre=$no <br>";
    echo "Tipo=$tp <br>";
    echo "Tamaño=$ta <br>";
    echo "ha=$ha <br>";
    echo "hc=$hc <br>";*/
    $ruta="MisImagenes/".$no;
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");
    $result=mysqli_query($link,"select * from lugar where nombre='$lu'");
    
    if($row=mysqli_fetch_array($result)){
        $resul=mysqli_query($link,"select * from lugar where ubicacion='$ub'");
        if($row=mysqli_fetch_array($resul)){
        echo "<h3 class='ui header'>Ya existe ese lugar</h3>
        <div class='ui message'>
        Intenta de nuevo <a href='insertar.php'>aqui</a>
        </div>";
        }else{
        if(is_uploaded_file($_FILES['foto']['tmp_name']))
        {
            copy($_FILES['foto']['tmp_name'],$ruta);
            $res=mysqli_query($link,"insert into lugar(nombre,ubicacion,foto,categoria,horario_abre,horario_cierra) values('$lu','$ub','$no','$ca','$ha','$hc')");
            header("Location:lugares21.php?cat=$ca");
        }
        }
    }else{
        if(is_uploaded_file($_FILES['foto']['tmp_name']))
        {
            copy($_FILES['foto']['tmp_name'],$ruta);
            $res=mysqli_query($link,"insert into lugar(nombre,ubicacion,foto,categoria,horario_abre,horario_cierra) values('$lu','$ub','$no','$ca','$ha','$hc')");
            header("Location:lugares21.php?cat=$ca");
        }
    }  

 mysqli_close($link);
?>
        </div>
    </body>
</html>