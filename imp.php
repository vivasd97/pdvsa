<?php
 session_start();
 unset($_SESSION['consulta3']);
?>


<!DOCTYPE html>
<html>
</div>
<head>
	<title>Bienvenido</title>
	
	<link rel="stylesheet" type="text/css" href="libreria/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
	<link rel="stylesheet" href="libreria/font-awesome.css">
	<link rel="stylesheet" href="libreria/sweetalert.css">
	<link rel="stylesheet" href="libreria/datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="libreria/select2/dist/css/select2.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/select2.js"></script>
	<script src="js/funciones.js"></script>
	<script src="js/datetimepicker.js"></script>
	<script src="alertifyjs/alertify.js"></script>

</head>

<div id="header"></div> 


<body background="img/f.jpg"  onload="changeHashOnLoad();">

<div id="gestion-imp"></div>

<div class="modal fade" id="modalregistroimp" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Agregar Activo en Desincorporacion</h4>				
			</div>
			<div class="modal-body" >

			 	<label class="sr-only" for="user">Indicador</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user"></i></div>
					<input type="text" class="form-control" placeholder="Indicador" id="Indicador">		
				</div>	

				<div class="spacing-2"></div>
               
                <label class="sr-only" for="user">Tipo</label>
                <div class="input-group">
					<div class="input-group-addon"><i class="fa fa-th-list"></i></div>
					 <select class="form-control" placeholder="Indicador" id="Tipo">
				        <option selected="" >Tipo</option>                          
                        <option value="Red">Red</option>
                        <option value="Local">Local</option>
                     </select>
					
				</div>	

                <div class="spacing-2"></div>

                <label class="sr-only" for="user">Marca</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-cc"></i></div>
					<select class="form-control" name="marca" id="Marca">
                        <option selected="" >Marca</option>
                        <option value='Sharp'>Sharp</option>
                        <option value='XeroX'>XeroX</option>
                        
                    </select>		
				</div>

				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Serial</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-tag"></i></div>
					<input type="text" class="form-control" placeholder="Serial" id="Serial">		
				</div>	

				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Modelo</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-info-circle"></i></div>
					<input type="text" class="form-control" placeholder="Modelo" id="Modelo">		
				</div>	

                <div class="spacing-2"></div>

				<label class="sr-only" for="user">Etiqueta</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-sticky-note"></i></div>
					<input type="text" class="form-control" placeholder="Etiqueta" id="Etiqueta">		
				</div>	 

				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Estado</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-signal"></i></div>
	
					<select class="form-control"  id='Estado'>
						<option selected='Estado'>Estado</option>
						<option  value='Desincorporado' >Desincorporado </option>
						<option  value='Reasignado' >Reasignado </option>
						<option  value='Obsoleto' >Obsoleto</option>
					</select>
				</div>

                <div class="spacing-2"></div>

				<label class="sr-only" for="user">Comentario</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-text-height"></i></div>
					<textarea type="text" class="form-control" placeholder="Comentario" id="Comentario"></textarea>
				</div>	

      			<div class="spacing-2"></div>

				<label class="sr-only" for="user">Fecha</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
						<div class="date form_datetime">
				        	<input size="16" type="text" value=""  class="form-control"  id="Fecha">
				        	<span class="add-on"><i class="icon-th"></i></span>
				    	</div>
				</div>
				     
  

<div class="spacing-2"></div>
			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal" id="Agregarnuevo3">Agregar</button>
		    </div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaledicionimp" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Editar Activo </h4>				
			</div>
			<div class="modal-body">

            <input type="text" hidden="" id="idindicador" name="">
							
            <label class="sr-only" for="user">Indicador</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user"></i></div>
					<input type="text" class="form-control" placeholder="Indicador" id="Indicadore">		
				</div>	

				<div class="spacing-2"></div>
               
                <label class="sr-only" for="user">Tipo</label>
                <div class="input-group">
					<div class="input-group-addon"><i class="fa fa-th-list"></i></div>
					 <select class="form-control" placeholder="Indicador" id="Tipoe">
					 	<option selected="" >Tipo</option>                          
                        <option value="Oficina">Oficina</option>
                        <option value="Papeleria">Papeleria</option>
                     </select>
					
				</div>	

                <div class="spacing-2"></div>

                <label class="sr-only" for="user">Marca</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-cc"></i></div>
					<select class="form-control" name="marca" id="Marcae">
                       <option selected="" >Marca</option>
                        <option value='Sharp'>Sharp</option>
                        <option value='XeroX'>XeroX</option>
                    </select>		
				</div>	

				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Serial</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-tag"></i></div>
					<input type="text" class="form-control" placeholder="Serial" id="Seriale">		
				</div>	

				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Modelo</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-info-circle"></i></div>
					<input type="text" class="form-control" placeholder="Modelo" id="Modeloe">		
				</div>	

                <div class="spacing-2"></div>

				<label class="sr-only" for="user">Etiqueta</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-sticky-note"></i></div>
					<input type="text" class="form-control" placeholder="Etiqueta" id="Etiquetae">		
				</div>	 

				<div class="spacing-2"></div>

		<label class="sr-only" for="user">Estado</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-signal"></i></div>
	
					<select class="form-control" name="marca" id='Estadoe'>
						<option selected='Estado'>Estado</option>
						<option  value='Desincorporado' >Desincorporado</option>
						<option  value='Reasignado' >Operativo</option>
				

					</select>
				</div>

				
		      <div class="spacing-2"></div>

				<label class="sr-only" for="user">Comentario</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-text-height"></i></div>
					<textarea  class="form-control" placeholder="Comentario" id="Comentarioe"></textarea>
				</div>

                <div class="spacing-2"></div>

	<label class="sr-only" for="user">Fecha</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
						<div class="date form_datetime">
				        	<input size="16" type="text" value=""  class="form-control"  id="Fechae">
				        	<span class="add-on"><i class="icon-th"></i></span>
				    	</div>
				</div>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal" id="Actualizardatos3">Actualizar</button>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#header').load('componentes/header.php');
		$('#gestion-imp').load('componentes/gestion-imp.php');
		
		
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#Agregarnuevo3').click(function(){
      Indicador=$('#Indicador').val();
      Tipo=$('#Tipo').val();
      Marca=$('#Marca').val();
      Serial=$('#Serial').val();
      Modelo=$('#Modelo').val();
      Etiqueta=$('#Etiqueta').val();
      Estado=$('#Estado').val();
      Comentario=$('#Comentario').val();
      Fecha=$('#Fecha').val();
      Agregardatos3(Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha);
    });

    $('#Actualizardatos3').click(function(){
    	ActualizarDatos3();
    });
    
  });
</script>
<script type="text/javascript">
	$(".form_datetime").datetimepicker({
		format: "dd MM yyyy - hh:ii",
		autoclose: true,
		todayBtn: true,
		pickerPosition: "bottom-left"
	});
</script>     

<script type = "text/javascript" >
function changeHashOnLoad() {
     window.location.href += "#";
     setTimeout("changeHashAgain()", "50"); 
}

function changeHashAgain() {
  window.location.href += "1";
}

var storedHash = window.location.hash;
window.setInterval(function () {
    if (window.location.hash != storedHash) {
         window.location.hash = storedHash;
    }
}, 50);
</script>