	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/stylos.css" rel="stylesheet">

		<!-- Latest compiled and minified CSS -->

		<title>Document</title>
	</head>
	<body>
		<div class="container">
		<div class="col-md-6" id="mostrarnom">
					
				</div>
			<h1>formulario Contacto</h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  id="form_ajax" class="form form-horizontal">
				<div class="form-group"><label for="" class="contrl-label col-md-1">Nombre</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="nombre">
				</div>
				</div>
				<div class="form-group"><label for="" class="contrl-label col-md-1"></label>
				<div class="col-md-6">
					<input type="button" value="Enviar" name="enviar" class="btn btn-info" id="btn_ajax">
				</div>

				</div>
				<div class="form-group"><label for="" class="control-label col-md-1"></label>
				<div class="col-md-6">
					<div id="mostrar" class="" role="alert"></div>
				</div>

				</div>
				
			</form>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/script.js"></script>

	</body>
	</html>