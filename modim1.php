<?PHP
    $id=$_REQUEST['idl'];
    $ta=$_FILES['foto']['size'];
    $tp=$_FILES['foto']['type'];
    $no=$_FILES['foto']['name'];

    echo "Nombre=$no <br>";
    echo "Tipo=$tp <br>";
    echo "Tamaño=$ta <br>";

    $ruta="MisImagenes/".$no;
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");

    if(is_uploaded_file($_FILES['foto']['tmp_name']))
        {
            copy($_FILES['foto']['tmp_name'],$ruta);
            $res=mysqli_query($link,"update lugar set foto='$no' where id_lugar=$id");
            header("Location:descripcion3.php?idl=$id");
        }

 mysqli_close($link);
?>