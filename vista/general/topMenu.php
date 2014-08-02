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