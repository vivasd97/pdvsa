<?php 
session_start();


$idper2=$_POST['valor'];

$_SESSION['consulta2']=$idper2;

echo $idper2;


 ?>