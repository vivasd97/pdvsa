<?php

require_once('php/class.ezpdf2.php');
$pdf =& new Cezpdf('A1','Legal'); 
$pdf->selectFont('ezpdf/fonts/Helvetica.afm' ,'c',18);
$pdf->ezSetCmMargins(1,1,1.5,1.5); 
$pdf->addJpegFromFile($img ='../16.Jpeg',$x=1050, $y= $pdf->y-120 ,$w=100,$h=0);
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



  if(isset($_SESSION['consulta'])) {
     if($_SESSION['consulta'] > 0){
       $idp=$_SESSION['consulta'];
        $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_pc where id='$idp'";
         }else{
         $sql="SELECT id,id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_pc";
         }
        }else{
        $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_pc";
         }


        $resSql=mysqli_query($con,$sql) or die("<br>Error consulta</br>".mysql_error());
        
        while($ver=mysqli_fetch_row($resSql)){
    
       //la estructura serÃ¡ 'Nombre campo'=> posiciÃ³n del arreglo y la informaciÃ³n
       $datos[]=array('id'=>$ver[0],'Indicador'=>$ver[1],'Tipo'=>$ver[2], 'Marca'=>$ver[3],'Serial'=>$ver[4],'Modelo'=>$ver[5],'Etiqueta'=>$ver[6],  'Estado'=>$ver[7],'Comentario'=>$ver[8], 'Fecha'=>$ver[9]);
}
$titles=array('id'=>'id','Indicador'=>'Indicador', 'Tipo'=>'Tipo','Marca'=>'Marca','Serial'=>'Serial','Modelo'=>'Modelo','Etiqueta'=>'Etiqueta', 'Estado'=>'Estado', 'Comentario'=>'Comentario', 'Fecha'=>'Fecha');
$pdf->ezTable($datos);
$pdf->ezText("\n",20);
$pdf->ezText("                        ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------\n",20);

$resSql=mysqli_query($con,$sql) or die("<br>Error consulta</br>".mysql_error());
        
        while($ver=mysqli_fetch_row($resSql)){
    
       //la estructura serÃ¡ 'Nombre campo'=> posiciÃ³n del arreglo y la informaciÃ³n
       $Serial[]=array('-------------id-------------'=> $ver[0],'-------------SERIAL-------------'=> ($ver[0]*1000000000)+1+$ver[9]*$ver[9]*1000000000+9*($ver[0]+1+$ver[9]*$ver[9]*10000000));
}
$titles=array('-------------id-------------'=>'-------------id-------------','-------------SERIAL-------------'=>'-------------SERIAL-------------',80);
$pdf->ezTable($Serial);
$pdf->ezText(" ",20);

$pdf->ezStream();





?>
