<?php
	include(dirname(__FILE__)."/init.php");
	
?>
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<!-- Para estar seguro de que se utiliza el modo de generación de gráficos más reciente de IE. -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- En dispositivos móviles, para garantizar la generación de gráficos correcta y un funcionamiento correcto de zoom de toque de pantalla. -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prueba de bootstrap</title>
		
		<!-- Bootstrap -->
    	<link href="<?php echo GetConfig('siteURL'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	
    	<style type="text/css">
    	/*
    		div > div > div {
    			border-width: 1px; border-color: red; border-style: solid;
    		}
    		*/
    		
    		body { padding-top: 70px; }
    	</style>
    	
    	<?php 
    	/*
    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		*/				
		?>
	
	</head>
	
	<body>
	
		<?php require_once ( SIGECOST_VISTA_PATH . '/general/topMenu.php' ); ?>
		
		<div class="container">
			<div class="jumbotron">
			
				<h1>Bienvenido a Sigecost</h1>
				<p>
					Sistema de gesti&oacute;n de conocimiento de soporte t&eacute;cnico
					para los infocentros del pa&iacute;s.
				</p>
				<p><a class="btn btn-primary btn-lg" role="button">Leer m&aacute;s</a></p>
			</div>
		</div>
		
		
		
		<div class="container">
			<h1>B&uacute;squedas</h1>
			<ul>
				<li><a href="controlador/todasTripletas.php">Todas las tripletas</a></li>
				<li><a href="controlador/busqueda.php">B&uacute;squeda</a></li>
			</ul>
		</div>

		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo GetConfig('siteURL'); ?>/lib/jquery/jquery-1.11.1.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo GetConfig('siteURL'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
	
	</body>

</html>