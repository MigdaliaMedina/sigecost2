<?php

	$fotocopiadoras = $GLOBALS['SigecostRequestVars']['fotocopiadoras'];
	
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
				<li><a href="fotocopiadora.php?accion=insertar">Insertar</a></li>
				<li class="active"><a href="fotocopiadora.php?accion=Buscar">Buscar</a></li>
			</ul>
		</div>
		
		<?php include( SIGECOST_PATH_VISTA . '/mensajes.php');?>
		
		<div class="container">
		
			<div class="page-header">
				<h1>Instancias del elemento tecnol&oacute;gico fotocopiadora</h1>
			</div>
			
			<?php
				if (is_array($fotocopiadoras) && count($fotocopiadoras) > 0)
				{
			?>
			<div class="table-responsive">
				<table class="table table table-hover table-responsive">
					<thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
			<?php
					foreach ($fotocopiadoras AS $fotocopiadora)
					{
			?>
						<tr>
							<td><?php echo $fotocopiadora->getMarca() ?> </td>
							<td><?php echo $fotocopiadora->getModelo() ?></td>
							<td>
								<form class="form-horizontal" role="form" action="fotocopiadora.php" method="post">
									<div style="display:none;">
										<input type="hidden" name="accion" value="">
										<input type="hidden" name="iri" value="<?php echo $fotocopiadora->getIri() ?>">
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
			<p>No existen fotocopiadoras que mostrar.</p>
			<?php
				}
			?>
		
		</div>
		
		<?php require ( SIGECOST_PATH_VISTA . '/general/footer.php' ); ?>
			
	</body>

</html>
