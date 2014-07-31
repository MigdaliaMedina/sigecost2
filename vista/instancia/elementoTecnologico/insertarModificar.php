<?php

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
	
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo GetConfig('siteURL'); ?>">Sigecost</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Instancia <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo GetConfig('siteURL'); ?>/controlador/instancia/elementoTecnologico/impresora.php?accion=insertar">Insertar impresora</a></li>
								<li><a href="#">Modificar</a></li>
								<li><a href="#">Enlace 3.3</a></li>
								<li class="divider"></li>
								<li><a href="#">Enlace 3.2.1</a></li>
								<li class="divider"></li>
								<li><a href="#">Enlace 3.3.2</a></li>
							</ul>
						</li>
						<li class="active"><a href="#">Enlace 1</a></li>
						<li><a href="#">Enlace 2</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Enlace 3 <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Insertar impresora</a></li>
								<li><a href="#">Modificar</a></li>
								<li><a href="#">Enlace 3.3</a></li>
								<li class="divider"></li>
								<li><a href="#">Enlace 3.2.1</a></li>
								<li class="divider"></li>
								<li><a href="#">Enlace 3.3.2</a></li>
							</ul>
						</li>
					</ul>
      
				</div><!-- /.navbar-collapse -->
		  	
			</div>
		</nav>
		
		<div class="container">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<strong>¡Oh, cielos!</strong> <a href="#" class="alert-link">Cambie unas pocas cosas</a> e inténtelo nuevamente.
			</div>
		</div>
		
		
		<div class="container">
			<h1>Insertar una instancia de impresora</h1>
			
		</div>

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="<?php echo GetConfig('siteURL'); ?>/lib/jquery/jquery-1.11.1.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo GetConfig('siteURL'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
	
	</body>

</html>