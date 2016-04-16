<?PHP
    $idp=$_GET['idl'];
    
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"disfrutandopuebla");
    $res=mysqli_query($link,"delete from lugar where id_lugar=$idp");
    header("Location:lugares3.php");

 mysqli_close($link);
?>