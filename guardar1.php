<?php 
	$iden=$_POST["iden"];
	$nom=$_POST["nom"];
	$dir=$_POST["dir"];
	$tel=$_POST["tel"];
	$corr=$_POST["corr"];

	include 'conexion.php'

  	mysql_query("insert into clientes values('$iden','$nom','$dir','$tel','$corr')");
?>

<html>
<head>
	<title>prueba</title>
	<link rel="stylesheet" type="text/css" href="ESTILOS/bootstrap.css">
</head>						
<body>
		<div class="container">
		<div class="row">
		<div class="col-md-12">
				<?php include 'menu.php' ?>
		</div>
		</div>
		<div class="col-md-6">
			<h1> Registro Guardado </h1>
			<div class="well">
			<p>Su registro a sido grabado satisfactoriamente.</p>
			</div>
		</div>
		<div class="col-md-6">
			<img src="logo.png" class="img-responsive" alt="responsive image">
		</div>
		
</body>
</html>