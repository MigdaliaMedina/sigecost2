<?php

	require_once( dirname(__FILE__) . '/../../../../init.php' );
	
	// Controladores
	require_once ( SIGECOST_PATH_CONTROLADOR . '/instancia/soporteTecnico/impresora/impresora.php' );
	
	// Modelos
	require_once ( SIGECOST_PATH_MODELO . '/instancia/elementoTecnologico/impresora.php' );
	require_once ( SIGECOST_PATH_MODELO . '/instancia/soporteTecnico/impresora/repararImpresionCorrida.php' );
	
	class ControladorInstanciaSTImpresoraRepararImpresionCorrida extends ControladorInstanciaSTImpresora
	{
		public function buscar()
		{
			$instancias = ModeloInstanciaSTImpresoraRepararImpresionCorrida::buscarInstancias();
			
			$GLOBALS['SigecostRequestVars']['instancias'] = $instancias;
				
			require ( SIGECOST_PATH_VISTA . '/instancia/soporteTecnico/impresora/repararImpresionCorridaBuscar.php' );
		}
		
		public function desplegarDetalles()
		{
			if(!isset($_REQUEST['iri']) || ($iri=trim($_REQUEST['iri'])) == ''){
				$GLOBALS['SigecostErrors']['general'][] = 'Debe introducir un iri.';
			} else {
				$this->__desplegarDetalles($iri);
			}
		}
		
		public function guardar()
		{
			$form = FormularioManejador::getFormulario(FORM_INSTANCIA_ST_IMPRESORA_REPARAR_IMPRESION_CORRIDA_INSERTAR_MODIFICAR);
			
			// Validar, obtener y guardar todos los inputs desde el formulario
			$this->__validarUrlSoporteTecnico($form);
			$this->__validarIriEquipoReproduccion($form);
			
			// Verificar que no hubo nigún error con los datos suministrados en el formulario
			if(count($GLOBALS['SigecostErrors']['general']) == 0)
			{
				try
				{
					// Consultar si existe una instancia de soporte técnico en impresora para repara impresión corrida, con las mismas características
					if(($existeInstancia = ModeloInstanciaSTImpresoraRepararImpresionCorrida::existeInstancia($form->getSoporteTecnico())) === null)
						throw new Exception("La instancia no pudo ser guardada.");
					
					// Validar si existe una instancia de soporte técnico en impresora para repara impresión corrida, con las mismas características
					if ($existeInstancia === true)
						throw new Exception("Ya existe una instancia con las mismas caracter&iacute;sticas.");
					
					// Guardar instancia de soporte técnico en impresora para repara impresión corrida, en la base de datos
					$iriNuevaInstancia = ModeloInstanciaSTImpresoraRepararImpresionCorrida::guardarInstancia($form->getSoporteTecnico());
					
					// Verificar si ocurrio algún error mientras se guardaba la instancia
					if ($iriNuevaInstancia === false)
						throw new Exception("La instancia de no pudo ser guardada.");
					
					// Mostrar un mensaje indicando que se ha guardado satisfactoriamente, y mostrar los detalles de la instancia de guardada
					$GLOBALS['SigecostInfo']['general'][] = "Instancia guardada satisfactoriamente.";
					$this->__desplegarDetalles($iriNuevaInstancia);
					
				} catch (Exception $e){
					$GLOBALS['SigecostErrors']['general'][] = $e->getMessage();
					$this->__desplegarFormulario();
				}
			} else {
				$this->__desplegarFormulario();
			}
		}
		
		public function insertar()
		{
			$this->__desplegarFormulario();
		}
		
		private function __desplegarDetalles($iriInstancia)
		{
			$instancia = ModeloInstanciaSTImpresoraRepararImpresionCorrida::obtenerInstanciaPorIri($iriInstancia);
				
			$GLOBALS['SigecostRequestVars']['instancia'] = $instancia;
				
			require ( SIGECOST_PATH_VISTA . '/instancia/soporteTecnico/impresora/repararImpresionCorridaDetalles.php' );
		}
		
		private function __desplegarFormulario()
		{
			$impresoras = ModeloInstanciaETImpresora::obtenerTodasImpresoras();
			
			$GLOBALS['SigecostRequestVars']['impresoras'] = $impresoras;
			
			require ( SIGECOST_PATH_VISTA . '/instancia/soporteTecnico/impresora/repararImpresionCorridaInsertarModificar.php' );
		}
	}
	
	new ControladorInstanciaSTImpresoraRepararImpresionCorrida();
?>
