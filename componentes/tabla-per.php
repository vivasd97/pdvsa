<div class="spacing-3"></div>
<?php
session_start();
  require_once "../php/conexion.php";
  $conexion=conexion();
?>
<script>
      $(document).ready(function(){
        $("#reporte2").click( function(e){ 
                //e.PreventDefault();
                //alert("atras");
                $(location).attr("href","reporte2.php");
                return false;
        });
      });
      
  </script>
  
   <div class="container-fluid ">
  	 <div class="row">
	   <div class="col-md-8 col-sm-6 col-lg-9">
		<h3 class="white">REGISTRO DE ACTIVO </h3>
		<table class="table table-condensed table-bordered " >
			<caption>
				<button class="btn btn-primary col-md-2" data-toggle="modal" data-target="#modalregistroper">
					Agregar nuevo
					<span class="fa fa-plus-circle"></span></button>
				<button class="btn btn-primary col-md-offset-8" id="reporte2">
					Reporte
					<span class="fa fa-check"></span></button>
			</caption>
			<tr>
				<td>Indicador</td>
				<td>Tipo</td>
				<td>Marca</td>
				<td>Serial</td>
				<td>Modelo</td>
				<td>Etiqueta</td>
				<td>Estado</td>
				<td>Comentario</td>
				<td>Fecha</td>
				<td>Editar</td>
				
			</tr>

			<?php 

					if(isset($_SESSION['consulta2'])){
						if($_SESSION['consulta2'] > 0){
							 $idp2=$_SESSION['consulta2'];
							 $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per where id='$idp2'";
						}else{
							 $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per";
						}
					}else{
						 $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_per";
					}
               
                $result=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($result)){

                $datos=$ver[0]."||".
                		$ver[1]."||".
                		$ver[2]."||".
                		$ver[3]."||".
                		$ver[4]."||".
                		$ver[5]."||".
                		$ver[6]."||".
                		$ver[7]."||".
                		$ver[8]."||".
                		$ver[9];

			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				<td>
					<button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#modaledicionper" onclick="Mostrardatos2('<?php echo $datos ?>')"></button>
				</td>
				

			</tr>
               <?php
               }

               ?>  


		</table> 

</div>
</div>    

</div>
 

