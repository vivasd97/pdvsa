
<div class="container-fluid">   
 <div id="buscador" ></div>
      <div class="row">
            <div class="list-group col-sm-4 col-md-3 col-md-offset-0 spacing-1">
               	<p class="list-group-item active center title_select">Activo en Gestion</p>

              	<div class="spacing-2" id="menu">
                  <p class="list-group-item center" disabled><img src="img/icono_pc.png" class="icono"></p>
                   <a href="inicio.php" title="regresar" class="list-group-item white_2 ayuda"><img src="img/icono_volver.png" class="icono-slider"><span class="ayudatext">regresar</span></a>
                </div>
          	</div>
            <div>
         
            <div id="tabla-pc"></div>
            </div>
     </div>
    </div>
<script type="text/javascript">
  $(document).ready(function(){    
    $('#buscador').load('componentes/buscador.php');
    $('#tabla-pc').load('componentes/tabla-pc.php');

  });
</script>

