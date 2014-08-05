<?php
	require_once ( dirname(__FILE__) . '/../../init.php' );
	require_once ( SIGECOST_CONTROLADOR_PATH . '/desarrollo/queryScreen.php' );
	
	class ConsultaInstancias extends QueryScreen
	{
		public function getInstance()
		{
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
				SELECT
					?subject ?property ?object
				WHERE
				{
					{ kb:ontologiasoportetecnicov1_Class46 ?property ?object  }
					UNION
					{ ?subject ?property kb:ontologiasoportetecnicov1_Class46 }
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class46 .
						?subject ?property ?object
						
					}
					UNION
					{ kb:ontologiasoportetecnicov1_Class47 ?property ?object  }
					UNION
					{ ?subject ?property kb:ontologiasoportetecnicov1_Class47 }
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class47 .
						?subject ?property ?object
						
					}
				}
			';
			
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
				SELECT
					?subject ?property ?object
				WHERE
				{
					
					{ kb:ontologiasoportetecnicov1_Class46 ?property ?object  }
					UNION
					{ ?subject ?property kb:ontologiasoportetecnicov1_Class46 }
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class46 .
						?subject ?property ?object
			
					}
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class47 .
						?subject ?property ?object
			
					}
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class48 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class49 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class50 .
						?subject ?property ?object
			
					}
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class51 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class52 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class53 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class54 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class55 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class56 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class57 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class58 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class59 .
						?subject ?property ?object
			
					}
							UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class60 .
						?subject ?property ?object
			
					}
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class61 .
						?subject ?property ?object
			
					}
					UNION
					{
						?subject ?property2 kb:ontologiasoportetecnicov1_Class62 .
						?subject ?property ?object
			
					}
										
				}
			';
			
			
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
				PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
				PREFIX owl: <http://www.w3.org/2002/07/owl#>
				SELECT
					?subject ?property ?object
				WHERE
				{
					{
						_:consumible rdf:type kb:Consumible .
						?subject ?dshhd _:consumible .
						?subject ?property ?object
					}
					
					#UNION
					#{
					#	_:consumible2 rdf:type kb:Consumible .
					#	?object ?dshhd _:consumible2 .
					#	?subject owl:distinctMembers ?object
					#	
					#}
					
				}
					
			';
			
			$this->execute($query);
		}
		
		public function getInstanciaImpresora()
		{
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
				PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
					
				SELECT
					?subject
				WHERE
				{
					?subject rdf:type kb:Impresora
				}
			';
			
			$this->execute($query);
			
			echo "<br> <br>";
			
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
			
				SELECT
					?subject ?property ?object
				WHERE
				{
					{ kb:ontologiasoportetecnicov1_Class37 ?property ?object }
					UNION
					{ ?subject ?property kb:ontologiasoportetecnicov1_Class37 }
				}
			';
			
			$this->execute($query);
			
			$query = '
				PREFIX kb: <http://www.owl-ontologies.com/OntologySoporteTecnico.owl#>
		
				DESCRIBE kb:ontologiasoportetecnicov1_Class37
			';
				
			$this->execute($query);
		}
		
	}
	
	new ConsultaInstancias();
?>