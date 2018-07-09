<div class="container-fluid">
   <div id="buscador2" ></div>
      <div class="row">
            <div class="list-group col-sm-4 col-md-3 col-md-offset-0 spacing-1">
               	<p class="list-group-item active center">Activo en Gestion</p>

              	<div class="spacing-2" id="menu">
                  <p class="list-group-item center" disabled><img src="img/icono_peref.png" class="icono"></p>
                   <a href="inicio.php" title="regresar" class="list-group-item white_2 ayuda"><img src="img/icono_volver.png" class="icono-slider"><span class="ayudatext">regresar</span></a>
                </div>
          	</div>
            <div>
            <div id="tabla-per"></div>
            </div>
     </div>
    </div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#buscador2').load('componentes/buscador2.php');
    $('#tabla-per').load('componentes/tabla-per.php');
  });
</script>