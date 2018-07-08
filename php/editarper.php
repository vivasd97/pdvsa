<?php
  require_once "conexion.php";
  $conexion=conexion();
      $id=$_POST['id'];
      $I=$_POST['Indicador'];
      $T=$_POST['Tipo'];
      $M=$_POST['Marca'];
      $S=$_POST['Serial'];
      $Mo=$_POST['Modelo'];
      $E=$_POST['Etiqueta'];  
      $Es=$_POST['Estado'];
      $C=$_POST['Comentario']; 
      $F=$_POST['Fecha']; 

       $sql="UPDATE tabla_per set Indicador='$I',
                                 Tipo='$T',
                                 Marca='$M',
                                 Serial='$S',
                                 Modelo='$Mo',
                                 Etiqueta='$E',
                                 Estado='$Es',
                                 Comentario='$C',
                                 Fecha='$F' 
       								        where id='$id'";

       echo $result=mysqli_query($conexion,$sql);						 
?>