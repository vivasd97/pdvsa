function Agregardatos(Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha){

  cadena="Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

  $.ajax({
        type:"POST",
        url:"php/agregarnuevopc.php",
        data:cadena,
        success:function(r){
            if (r==1) {                  
                $('#tabla-pc').load('componentes/tabla-pc.php'); 
                $('#buscador').load('componentes/buscador.php'); 
            alertify.success("agregado con exito :)");
          
            	
            }else{
            	alertify.error("fallo el servidor :(");
            }
        }
  });
}

function Agregardatos2(Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha){

  cadena="Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

  $.ajax({
        type:"POST",
        url:"php/agregarnuevoper.php",
        data:cadena,
        success:function(r){
            if (r==1) {                  
                $('#tabla-per').load('componentes/tabla-per.php'); 
                $('#buscador2').load('componentes/buscador2.php'); 
            alertify.success("agregado con exito :)");
          
                
            }else{
                alertify.error("fallo el servidor :(");
            }
        }
  });
}

function Agregardatos3(Indicador,Tipo,Marca,Serial,Modelo,Etiqueta,Estado,Comentario,Fecha){

  cadena="Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

  $.ajax({
        type:"POST",
        url:"php/agregarnuevoimp.php",
        data:cadena,
        success:function(r){
            if (r==1) {                  
                $('#tabla-imp').load('componentes/tabla-imp.php'); 
                $('#buscador3').load('componentes/buscador3.php'); 
            alertify.success("agregado con exito :)");
          
                
            }else{
                alertify.error("fallo el servidor :(");
            }
        }
  });
}

function Mostrardatos(datos){
    d=datos.split('||');
$('#idindicador').val(d[0]);
$('#Indicadore').val(d[1]);
$('#Tipoe').val(d[2]);
$('#Marcae').val(d[3]);
$('#Seriale').val(d[4]);
$('#Modeloe').val(d[5]);
$('#Etiquetae').val(d[6]);
$('#Estadoe').val(d[7]);
$('#Comentarioe').val(d[8]);
$('#Fechae').val(d[9]);
}

function Mostrardatos2(datos){
    d=datos.split('||');
$('#idindicador').val(d[0]);
$('#Indicadore').val(d[1]);
$('#Tipoe').val(d[2]);
$('#Marcae').val(d[3]);
$('#Seriale').val(d[4]);
$('#Modeloe').val(d[5]);
$('#Etiquetae').val(d[6]);
$('#Estadoe').val(d[7]);
$('#Comentarioe').val(d[8]);
$('#Fechae').val(d[9]);
}

function Mostrardatos3(datos){
    d=datos.split('||');
$('#idindicador').val(d[0]);
$('#Indicadore').val(d[1]);
$('#Tipoe').val(d[2]);
$('#Marcae').val(d[3]);
$('#Seriale').val(d[4]);
$('#Modeloe').val(d[5]);
$('#Etiquetae').val(d[6]);
$('#Estadoe').val(d[7]);
$('#Comentarioe').val(d[8]);
$('#Fechae').val(d[9]);
}

function ActualizarDatos(){
id=$('#idindicador').val();
Indicador=$('#Indicadore').val();
Tipo=$('#Tipoe').val();
Marca=$('#Marcae').val();
Serial=$('#Seriale').val();
Modelo=$('#Modeloe').val();
Etiqueta=$('#Etiquetae').val();
Estado=$('#Estadoe').val();
Comentario=$('#Comentarioe').val();
Fecha=$('#Fechae').val();

cadena=  "id=" + id +
         "&Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

         $.ajax({
        type:"POST",
        url:"php/editarpc.php",
        data:cadena,
        success:function(r){
            if (r==1) {alertify.success("actualizado con exito :)");
         
             $('#tabla-pc').load('componentes/tabla-pc.php');
             $('#buscador').load('componentes/buscador.php');
                
            }else{
                alertify.error("fallo el servidor :(");
            }
        }
  });
}

function ActualizarDatos2(){
id=$('#idindicador').val();
Indicador=$('#Indicadore').val();
Tipo=$('#Tipoe').val();
Marca=$('#Marcae').val();
Serial=$('#Seriale').val();
Modelo=$('#Modeloe').val();
Etiqueta=$('#Etiquetae').val();
Estado=$('#Estadoe').val();
Comentario=$('#Comentarioe').val();
Fecha=$('#Fechae').val();

cadena=  "id=" + id +
         "&Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

         $.ajax({
        type:"POST",
        url:"php/editarper.php",
        data:cadena,
        success:function(r){
            if (r==1) {alertify.success("actualizado con exito :)");
         
             $('#tabla-per').load('componentes/tabla-per.php');
             $('#buscador2').load('componentes/buscador2.php');
                
            }else{
                alertify.error("fallo el servidor :(");
            }
        }
  });
}

function ActualizarDatos3(){
id=$('#idindicador').val();
Indicador=$('#Indicadore').val();
Tipo=$('#Tipoe').val();
Marca=$('#Marcae').val();
Serial=$('#Seriale').val();
Modelo=$('#Modeloe').val();
Etiqueta=$('#Etiquetae').val();
Estado=$('#Estadoe').val();
Comentario=$('#Comentarioe').val();
Fecha=$('#Fechae').val();

cadena=  "id=" + id +
         "&Indicador=" + Indicador + 
         "&Tipo=" + Tipo +
         "&Marca=" + Marca +
         "&Serial=" + Serial +
         "&Modelo=" + Modelo +
         "&Etiqueta=" + Etiqueta +
         "&Estado=" + Estado +
         "&Comentario=" + Comentario +
         "&Fecha=" + Fecha;

         $.ajax({
        type:"POST",
        url:"php/editarimp.php",
        data:cadena,
        success:function(r){
            if (r==1) {alertify.success("actualizado con exito :)");
         
             $('#tabla-imp').load('componentes/tabla-imp.php');
             $('#buscador3').load('componentes/buscador3.php');
                
            }else{
                alertify.error("fallo el servidor :(");
            }
        }
  });
}