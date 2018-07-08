<?php

require_once('php/class.ezpdf.php');
$pdf =& new Cezpdf('A2','Legal'); 
$pdf->selectFont('ezpdf/fonts/Helvetica.afm' ,'B',14);
$pdf->ezSetCmMargins(1,1,1.5,1.5); 

$pdf->ezText("<b>LISTA DE ACTIVOS EN DESINCORPORACION</b>\n",20);

$pdf->ezText("<b>COORDINACION DE AIT: AUTOMATIZACION, INFORMATICA Y TELECOMUNICACION</b>\n",20);
session_start();
$bd_host = "localhost"; //conexiÃ³n localhost
    $bd_usuario = "root";  //nombre usuario
    $bd_password = ""; //contraseÃ±a 
    $bd_base = "pdvsa"; //nombre Base de Datos
        //Hacemos la conexiÃ³n y si no  mostramos error
    $con = mysqli_connect($bd_host, $bd_usuario, $bd_password) or die("Error con la conexiÃ³n"); 
        //Seleccionamos la Base de Datos de nuestra consulta anterior.
    mysqli_select_db($con,$bd_base) or die("Error al seleccionar db");
        //escribimos nuestra consulta



  if(isset($_SESSION['consulta2'])) {
     if($_SESSION['consulta2'] > 0){
       $idp=$_SESSION['consulta2'];
        $sql="SELECT Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per where id='$idp'";
         }else{
         $sql="SELECT Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per";
         }
        }else{
        $sql="SELECT Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per";
         }


        $resSql=mysqli_query($con,$sql) or die("<br>Error consulta</br>".mysql_error());
        
        while($ver=mysqli_fetch_row($resSql)){
    
       //la estructura serÃ¡ 'Nombre campo'=> posiciÃ³n del arreglo y la informaciÃ³n
       $datos[]=array('Indicador'=>$ver[0],'Tipo'=>$ver[1], 'Marca'=>$ver[2],'Serial'=>$ver[3],'Modelo'=>$ver[4],'Etiqueta'=>$ver[5],  'Estado'=>$ver[6],'Comentario'=>$ver[7], 'Fecha'=>$ver[8]);
}
$titles=array('id'=>'id','Indicador'=>'Indicador', 'Tipo'=>'Tipo','Marca'=>'Marca','Serial'=>'Serial','Modelo'=>'Modelo','Etiqueta'=>'Etiqueta', 'Estado'=>'Estado', 'Comentario'=>'Comentario', 'Fecha'=>'Fecha');
$pdf->ezTable($datos);
$pdf->ezStream();





?>
