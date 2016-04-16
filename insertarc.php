<?PHP
    $me=$_REQUEST['msj'];
    $idu=$_REQUEST['idu'];
    $idl=$_REQUEST['idl'];

    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");
    $res=mysqli_query($link,"insert into comentario(mensaje,id_lugar,id_usuario) values('$me','$idl','$idu')");
    if($_SESSION['tipo']==0){
        header("Location:descripcion2.php?idl=$idl");
    }else{
        header("Location:descripcion3.php?idl=$idl");
    }
   
    mysqli_close($link);
?>