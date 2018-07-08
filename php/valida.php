<?php
session_start();
$admin=$_POST['admin'];
$clave=$_POST['clave'];
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"pdvsa");
$myadmin = mysqli_query($link,"select admin from login where admin = '".htmlentities($_POST["admin"])."'"); 
$nmyadmin = mysqli_num_rows($myadmin);
if($nmyadmin != 0)
{ 
  $sql="SELECT * FROM login WHERE admin='$admin' and clave='$clave'";

$myclave = mysqli_query($link,$sql); 
$nmyclave = mysqli_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
if($nmyclave != 0)
  { 
     // session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] = mysqli_fetch_array($myclave); 
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 
        header ("Location:../inicio.php"); 
   }
  else{ 
      header("location:../intente_de_nuevo.php");
   } 
}
else
{ 
    header("location:../intente_de_nuevo2.php");}
mysqli_close($link);

?>