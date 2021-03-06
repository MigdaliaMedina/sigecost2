<?php

	$aplicaciones = $GLOBALS['SigecostRequestVars']['aplicaciones'];
	
?>
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<?php require ( SIGECOST_PATH_VISTA . '/general/head.php' ); ?>
		
    	<script type="text/javascript">
    	
			function setAccion(accion) {
				$('input[type="hidden"][name="accion"]').val(accion);
			}
			
    	</script>
	
	</head>
	
	<body>
	
		<?php require ( SIGECOST_PATH_VISTA . '/general/topMenu.php' ); ?>
		
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li><a href="aplicacionReproduccionSonidoVideo.php?accion=insertar">Insertar</a></li>
				<li class="active"><a href="aplicacionReproduccionSonidoVideo.php?accion=Buscar">Buscar</a></li>
			</ul>
		</div>
		
		<?php include( SIGECOST_PATH_VISTA . '/mensajes.php');?>
		
		<div class="container">
		
			<div class="page-header">
			<h1>Instancias del elemento tecnol&oacute;gico aplicaci&oacute;n reproducci&oacute;n sonido y video</h1>
			</div>
			
			<?php
				if (is_array($aplicaciones) && count($aplicaciones) > 0)
				{
			?>
			<div class="table-responsive">
				<table class="table table table-hover table-responsive">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Versi&oacute;n</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
			<?php
					foreach ($aplicaciones AS $aplicacion)
					{
			?>
						<tr>
							<td><?php echo $aplicacion->getNombre() ?> </td>
							<td><?php echo $aplicacion->getVersion() ?></td>
							<td>
								<form class="form-horizontal" role="form" action="aplicacionReproduccionSonidoVideo.php" method="post">
									<div style="display:none;">
										<input type="hidden" name="accion" value="">
										<input type="hidden" name="iri" value="<?php echo $aplicacion->getIri() ?>">
									</div>
									<button type="submit" class="btn btn-primary btn-xs" onclick="setAccion('modificar');">Modificar</button>
									<button type="submit" class="btn btn-primary btn-xs" onclick="setAccion('desplegarDetalles');">Ver detalles</button>
								</form>
							</td>
						</tr>	
			<?php
					}
			?>
					</tbody>
				</table>
			</div>
			<?php
				} else {
			?>
			<p>No existen aplicaciones reproducci&oacute;n sonido y video que mostrar.</p>
			<?php
				}
			?>
		
		</div>
		
		<?php require ( SIGECOST_PATH_VISTA . '/general/footer.php' ); ?>
			
	</body>

</html>
