<?PHP
    $id=$_REQUEST['idl'];
    $lu=$_REQUEST['lugar'];
    $ub=$_REQUEST['ubicacion'];
    $ca=$_REQUEST['categoria'];
    $ha=$_REQUEST['horaapertura'];
    $hc=$_REQUEST['horacierre'];

    echo "Lugar=$lu <br>";
    echo "Ubicacion=$ub <br>";
    echo "Categoria=$ca <br>";
    echo "ha=$ha <br>";
    echo "hc=$hc <br>";
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");
    $res=mysqli_query($link,"update lugar set nombre='$lu' where id_lugar=$id");
    $res=mysqli_query($link,"update lugar set ubicacion='$ub' where id_lugar=$id");
    $res=mysqli_query($link,"update lugar set categoria='$ca' where id_lugar=$id");
    $res=mysqli_query($link,"update lugar set horario_abre='$ha' where id_lugar=$id");
    $res=mysqli_query($link,"update lugar set horario_cierra='$hc' where id_lugar=$id");
    header("Location:descripcion3.php?idl=$id");

 mysqli_close($link);
?>