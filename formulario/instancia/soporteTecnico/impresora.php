<?php

	// Formularios
	require_once ( SIGECOST_FORMULARIO_PATH . '/formulario.php');

	class FormularioSTImpresora extends Formulario
	{
		public function toArray()
		{
			return array(
				
			);
		}
		
		public function toJson()
		{
			return json_encode($this->ToArray());
		}
	}
?>