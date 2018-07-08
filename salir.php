<!DOCTYPE html>

<html>
<div id="particles-js" ></div>

  <head>
  <title>Bienvenido</title>
  
  <link rel="stylesheet" type="text/css" href="libreria/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertifyjs.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="libreria/estilos.css">
  <link rel="stylesheet" href="libreria/font-awesome.min.css">
  <link rel="stylesheet" href="libreria/sweetalert.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>

<body background="img/f.jpg">

<script>
     
      swal({
  title: "Cerrando sesion",
text: "Se cerrará la sesion",
timer: 1000,
showConfirmButton: false,
},
  
function(){
  window.location.href='index.php';
}); 
</script>
</body>

</html>