<!DOCTYPE html>
<html>
<head>
	<title>Osteopatia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body id="borrarTodo">
	<section class="container">
		<div class="content row">
			<?php include "componentes/header.php"?>
		</div>
		<div class="row col-sm-6 col-md-6" >
			<h3><span class="label label-default">Estas Seguro que deseas BORRAR TODO?</span></h3>
			<form action="borrarTodo2.php" method="post">
				<input type="submit" name="si" value="si"/>
				<input type="submit" name="no" value="no"/>
			</form>
		</div>
		<?php include "componentes/footer.php"; ?>
	</section>
	
	
		
	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
