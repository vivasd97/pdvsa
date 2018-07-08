<?php 

  function conexion(){

      $servidor="localhost";
      $usuario="root";
      $password="";
      $bd="pdvsa";
      

      $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
      return $conexion; 
  }

      if (conexion()) {
      	echo "";
      }else{
      	echo "no conectado";
      }

 ?>