<?php

require_once('php/class.ezpdf.php');
$pdf =& new Cezpdf('A2','Legal'); 
$pdf->selectFont('ezpdf/fonts/Helvetica.afm' ,'B',14);
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



  if(isset($_SESSION['consulta3'])){
                        if($_SESSION['consulta3'] > 0){
                             $idp3=$_SESSION['consulta3'];
                             $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_imp where id='$idp3'";
                        }else{
                             $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_imp";
                        }
                    }else{
                         $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_imp";
                    }


        $resSql=mysqli_query($con,$sql) or die("<br>Error consulta</br>".mysql_error());
        
        while($ver=mysqli_fetch_row($resSql)){
    
       //la estructura serÃ¡ 'Nombre campo'=> posiciÃ³n del arreglo y la informaciÃ³n
       $datos[]=array('Indicador'=>$ver[1],'Tipo'=>$ver[2], 'Marca'=>$ver[3],'Serial'=>$ver[4],'Modelo'=>$ver[5],'Etiqueta'=>$ver[6],  'Estado'=>$ver[7],'Comentario'=>$ver[8], 'Fecha'=>$ver[9]);
}
$titles=array('id'=>'id','Indicador'=>'Indicador', 'Tipo'=>'Tipo','Marca'=>'Marca','Serial'=>'Serial','Modelo'=>'Modelo','Etiqueta'=>'Etiqueta', 'Estado'=>'Estado', 'Comentario'=>'Comentario', 'Fecha'=>'Fecha');
$pdf->ezTable($datos);
$pdf->ezStream();





?>
