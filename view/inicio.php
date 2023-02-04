<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<style type="text/css">
			.error-template {padding: 40px 15px;text-align: center;}
			.error-actions {margin-top:15px;margin-bottom:15px;}
			.error-actions .btn { margin-right:10px; }
		</style>
		<title>Proyecto Básico MVC | INICIO</title>
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="error-template">
		                <h1>Bienvenido a la Página de Inicio</h1>
		            </div>
		        </div>
		    </div>
		</div>
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link disabled" href="<?=PROJECT_FOLDER_PATH?>/inicio">Inicio</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?=PROJECT_FOLDER_PATH?>/contacto">Contacto</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?=PROJECT_FOLDER_PATH?>/nosotros">Nosotros</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?=PROJECT_FOLDER_PATH?>/aviso_de_privacidad">Aviso de Privacidad</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?=PROJECT_FOLDER_PATH?>/productos/catalogo">Catálogo de Productos</a>
		  </li>
		</ul>
	</body>
</html>