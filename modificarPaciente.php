<html>
<head>
	<title>Modificar Paciente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body id="anadir">
	<section class="container">
		<div class="content row">
			<?php include "componentes/header.php"?>
		</div>
		<div class="row col-sm-6 col-md-6" >
			<label>Introduzca los datos del paciente a modificar</label>
			<form role="form" method="post" action="anadirPaciente2.php">
				<div class="form-group">
			    	<label for="dni">DNI:</label>
			    	<input type="text" class="form-control" id="dni" name="dni">
				</div>
				<div class="form-group">
			    	<label for="nombre">NOMBRE:</label>
			    	<input type="text" class="form-control" id="nombre" name="nombre">
			  	</div>
			  	<div class="form-group">
			    	<label for="apellidos">APELLIDOS:</label>
			    	<input type="text" class="form-control" id="apellidos" name="apellidos">
			  	</div>
			  	<div class="form-group">
			    	<label for="localidad">LOCALIDAD:</label>
			    	<input type="text" class="form-control" id="localidad" name="localidad">
			  	</div>
			  	<div class="form-group">
			    	<label for="telefono">TELEFONO:</label>
			    	<input type="text" class="form-control" id="telefono" name="telefono">
			  	</div>
			  	<div class="form-group">
			  		<label for="historial">HISTORIAL:</label>
			  		<textarea class="form-control" rows="3" name="historial"></textarea>
			  	</div>
				<input type="submit" class="btn btn-default" name="modificar" value="modificar">
			</form>
		</div>
		<?php include "componentes/footer.php"; ?>
	</section>
	
	
		
	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
