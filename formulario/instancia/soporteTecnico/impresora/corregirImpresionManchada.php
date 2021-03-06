<?php

	// Entidades
	require_once ( SIGECOST_PATH_ENTIDAD . '/instancia/elementoTecnologico/impresora.php');
	require_once ( SIGECOST_PATH_ENTIDAD . '/instancia/soporteTecnico/impresora/corregirImpresionManchada.php');

	// Formularios
	require_once ( SIGECOST_PATH_FORMULARIO . '/instancia/soporteTecnico/impresora/impresora.php');

	class FormularioInstanciaSTImpresoraCorregirImpresionManchada extends FormularioInstanciaSTImpresora
	{
		public function __construct()
		{
			$this->setSoporteTecnico(new EntidadInstanciaSTImpresoraCorregirImpresionManchada());
			$this->getSoporteTecnico()->setEquipoReproduccion(new EntidadInstanciaETImpresora());
		}
	}
?>