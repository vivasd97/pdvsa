<!DOCTYPE html>
<html>
</div>
<head>
	<title>Bienvenido</title>
	
	<link rel="stylesheet" type="text/css" href="libreria/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertifyjs.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
	<link rel="stylesheet" href="libreria/font-awesome.css">
	<link rel="stylesheet" href="css/sweetalert.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<div id="header"></div> 

<body background="img/f.jpg">
<div id="gestion-imp"></div>
</body>


<script type="text/javascript">
	$(document).ready(function(){
		$('#header').load('componentes/header.php');
		$('#gestion-imp').load('componentes/gestion-imp.php');
	});
</script>
