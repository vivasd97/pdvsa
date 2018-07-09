<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	
	<link rel="stylesheet" type="text/css" href="libreria/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertifyjs.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="libreria/estilos.css">
	<link rel="stylesheet" href="libreria/font-awesome.min.css">
	<link rel="stylesheet" href="libreria/font-awesome.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<body background="img/f.jpg"  onload="changeHashOnLoad();">
	<div class="container"><div id="login"></div></div>

</body>

</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#login').load('componentes/login.php');
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

</html>





