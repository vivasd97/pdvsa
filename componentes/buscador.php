<?php
  require_once "../php/conexion.php";
  $conexion=conexion();
  $sql="SELECT id,Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha from tabla_pc";
                $result=mysqli_query($conexion,$sql);
?>

<div class="row">
  <div class="col-md-7"></div>
  	<div class="col-md-4">
<legend class="white"><center>Buscador  <i class="fa fa-search-plus"></i></center></legend>
	<select id="buscadorvivo" class="form-control input-sm">
		<option value="0">Selecciones activos <i class="fa fa-search-plus"></i></option>

		<?php  
          while ($ver=mysqli_fetch_row($result)):
         ?>

		<option value="<?php echo $ver[0] ?>">
			<?php echo $ver[1]."  ".$ver[2] ?>
      <?php echo $ver[3]."  ".$ver[4] ?>
      <?php echo $ver[5]."  ".$ver[6] ?>
      <?php echo $ver[7]."  ".$ver[8] ?>
      <?php echo $ver[9] ?>
			

		</option>
		<?php endwhile;	 ?>
		
	</select>
</div>
</div>
<script type="text/javascript">
      $(document).ready(function(){
        $('#buscadorvivo').select2();

        $('#buscadorvivo').change(function(){
             $.ajax({
                 type:"POST",
                 data:'valor=' + $('#buscadorvivo').val(),
                 url:'php/crearsession.php',
                 success:function(r){
                 	$('#tabla-pc').load('componentes/tabla-pc.php');
                 }

             });

        });

      });
</script>