<?php

	$aplicaciones = $GLOBALS['SigecostRequestVars']['aplicaciones'];
	$sistemasOperativos = $GLOBALS['SigecostRequestVars']['sistemasOperativos'];
	$form = FormularioManejador::getFormulario(FORM_INSTANCIA_ST_APLICACION_G_D_D_D_DESINSTALACION_APLICACION_INSERTAR_MODIFICAR);
	$instancia = $form->getSoporteTecnico();
	$instanciaAplicacion = $instancia->getAplicacionPrograma();
	$instanciaSistemaOperativo = $instancia->getSistemaOperativo();
	
?>
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<?php require ( SIGECOST_PATH_VISTA . '/general/head.php' ); ?>
		
	</head>
	
	<body>
	
		<?php require ( SIGECOST_PATH_VISTA . '/general/topMenu.php' ); ?>
		
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="desinstalacionAplicacion.php?accion=insertar">Insertar</a></li>
				<li><a href="desinstalacionAplicacion.php?accion=Buscar">Buscar</a></li>
			</ul>
		</div>
		
		<?php include( SIGECOST_PATH_VISTA . '/mensajes.php');?>
		
		<div class="container">
		
			<div class="page-header">
				<h1>Instancia de soporte t&eacute;cnico en aplicacion gr&aacute;fica digital, dibujo y dise&ntilde;o:&nbsp;
					<small>desinstalaci&oacute;n de aplicaci&oacute;n</small>
				</h1>
			</div>
			
			<form class="form-horizontal" role="form" method="post" action="desinstalacionAplicacion.php">
				<div style="display:none;">
					<input type="hidden" name="accion" value="guardar">
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="urlSoporteTecnico">Url soporte t&eacute;cnico:</label>
					<div class="col-sm-7">
						<input
							type="text" class="form-control" id="urlSoporteTecnico" name="urlSoporteTecnico" placeholder="Introduzca el url de S.T."
							value="<?php echo $instancia != null ? $instancia->getUrlSoporteTecnico() : "" ?>"
						>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="iriAplicacionPrograma">En aplicaci&oacute;n de programa:</label>
					<div class="col-sm-7">
						<select class="form-control" id="iriAplicacionPrograma"  name="iriAplicacionPrograma">
							<option value="0">Seleccionar aplicaci&oacute;n...</option>
							<?php
								if(is_array($aplicaciones) && count($aplicaciones) > 0)
								{
									foreach ($aplicaciones AS $aplicacion)
									{
										$seledted = strcmp($instanciaAplicacion->getIri(), $aplicacion->getIri()) == 0 ? ' selected="selected"' : "";  
										
							?>
							<option value="<?php echo $aplicacion->getIri() ?>"<?php echo $seledted ?>>
								<?php echo $aplicacion->getNombre() . ' - ' . $aplicacion->getVersion() ?>
							</option>
							<?php
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="iriSistemaOperativo">Sobre sistema operativo:</label>
					<div class="col-sm-7">
						<select class="form-control" id="iriSistemaOperativo"  name="iriSistemaOperativo">
							<option value="0">Seleccionar sistema operativo...</option>
							<?php
								
								if(is_array($sistemasOperativos) && count($sistemasOperativos) > 0)
								{
									foreach ($sistemasOperativos AS $sistemaOperativo)
									{
										$seledted = strcmp($instanciaSistemaOperativo->getIri(), $sistemaOperativo->getIri()) == 0 ? ' selected="selected"' : "";  
										
							?> 
							<option value="<?php echo $sistemaOperativo->GetIri() ?>"<?php echo $seledted ?>>
								<?php echo $sistemaOperativo->getNombre() . ' - ' . $sistemaOperativo->getVersion() ?>
							</option>
							<?php
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-7">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		
		</div>
		
		<?php require ( SIGECOST_PATH_VISTA . '/general/footer.php' ); ?>
			
	</body>

</html>
