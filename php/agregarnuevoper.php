<?php
  require_once "conexion.php";
  $conexion=conexion();
      $I=$_POST['Indicador'];
      $T=$_POST['Tipo'];
      $M=$_POST['Marca'];
      $S=$_POST['Serial'];
      $Mo=$_POST['Modelo'];
      $E=$_POST['Etiqueta'];  
      $Es=$_POST['Estado'];
      $C=$_POST['Comentario']; 
      $F=$_POST['Fecha']; 

       $sql="INSERT into tabla_per (Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha)
       								values ('$I','$T','$M','$S','$Mo','$E','$Es','$C','$F')";
       echo $result=mysqli_query($conexion,$sql);						 
?>
