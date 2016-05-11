<html>
<head>
	<title>Informacion</title>
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
			<h1> Informacion </h1>
			<hr>
			<div class="well">
			<p>Dentro de este portal tendremos acceso a la informacion requerida.</p>
			<hr>
			<p>Ingresando con los datos ya registrados anteriormente puede tener acceso a ellos.</p>
			<hr>
			</div>
		</div>
		<div class="col-md-6">
		<h1> Datos </h1>
			<hr>
			<div class="well">
			<form action="guardar2.php" method="post">
				<form>
			 	<div class="form-group">
			   		<label for="text"> Tratamiento </label>
			    	<input type="text" name="trata" class="form-control" id="cedula" placeholder="Numero de tratamento">
			  	</div>
			  	<div class="form-group">
			    	<label for="cedula"> Cliente </label>
			    	<input type="text" name="clien" class="form-control" id="exampleInputPassword1" placeholder="Identificacion">
			  		</div>
			    <div class="form-group">
			        <label for="cedula"> Descripcion </label>
			        <input type="text" name="desc" class="form-control" id="exampleInputPassword1" placeholder="Descripcion">
			    </div>
			    <div class="form-group">
			        <label for="cedula"> Cantidad </label>
			        <input type="text" name="can" class="form-control" id="exampleInputPassword1" placeholder="Cantidad">
			    </div>
			  	<div class="form-group">
			    		<label for="exampleInputFile"> Guardar Archivo </label>
			    		<input type="file" id="exampleInputFile">
			  	</div>
			  	<div>
			        
			    </div>
			  		<button type="submit" class="btn btn-info" value="GUARDAR"> BUSCAR </button>
				</form>
			</form>
			</div>
		</div>