 <html>
<head>
	<title>Registro Personas</title>
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
  <script type="text/javascript" src="js/bootstrap.js"></script>

</head>						
<body>
		<div class="container">
		<div class="row">
		<div class="col-md-12">
      <?php include 'menu.php' ?>
		</div>
		<div class="col-md-6">
		<h1> Ingresar Datos </h1>
			<hr>
			<div class="well">
			<form action="guardar1.php" method="post">
				<form>
			 		 <div class="form-group">
			   			<label for="text"> Identificacion </label>
			    		<input type="text" name="iden" class="form-control" id="cedula" placeholder="Cedula">
			  		</div>
			  		<div class="form-group">
			    		<label for="nombre"> nombre </label>
			    		<input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="nombre">
			  		</div>
			      <div class="form-group">
			        <label for="cedula"> direccion </label>
			        <input type="text" name="dir" class="form-control" id="exampleInputPassword1" placeholder="direccion">
			      </div>
			      <div class="form-group">
			        <label for="cedula"> telefono </label>
			        <input type="text" name="tel" class="form-control" id="exampleInputPassword1" placeholder="fijo o celular">
			      </div>
			      <div class="form-group">
			        <label for="cedula"> correo electronico </label>
			        <input type="text" name="corr" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
			      </div>
			  		<div class="form-group">
			    		<label for="exampleInputFile"> Guardar Archivo </label>
			    		<input type="file" id="exampleInputFile">
			  		</div>
			  		<div>
			        
			      </div>
			  			<button type="submit" class="btn btn-info" value="GUARDAR"> GUARDAR </button>
				</form>
				</div>
		</div>
		<div class="col-md-6">
			
			<h1> Registro Clientes </h1>
      <a href="pdfs/archivo.pdf">Codigo 12345 certificado</a>
			<hr>
			<div class="well">
			<p>Le damos la bienvenida nuevamente.</p>
			<hr>	 
			<p>En este portal podemos registrar los datos de los clientes que van a tener acceso a nuestra informacion de los procesos fitosanitarios. </p>
		</div>
		</div>
		</div>
	

    <script>
      $('.dropdown-toggle').dropdown();
    </script>

  	
</body>
</html>