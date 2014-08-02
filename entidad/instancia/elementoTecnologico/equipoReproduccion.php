<?php

	require_once ( SIGECOST_ENTIDAD_PATH . '/instancia/elementoTecnologico/elementoTecnologico.php' );
	
	class EntidadInstanciaETEquipoReproduccion extends EntidadInstanciaElementoTecnologico
	{
		private $_marca;
		private $_modelo;
		
		public function getMarca(){
			return $this->_marca;
		}
		public function setMarca($marca){
			$this->_marca = $marca;
		}
		public function getModelo(){
			return $this->_modelo;
		}
		public function setModelo($modelo){
			$this->_modelo = $modelo;
		}
	}
	
?>