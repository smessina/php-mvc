<?php

	class ProductoVista {

		private $scripts = array();
		
		public function ficha(){
			$ficha = file_get_contents('vista/plantillas/producto.html');

		}

		public function mostrar(){
			$base = file_get_contents('vista/plantillas/base.html');

			return str_replace("{SCRIPTS}", implode(null, $this->scripts), $base);

		}

		public function agregarScript($url){
			$dom = new DOMDocument();
			
			$script = $dom->createElement("script");
			
			$src = $dom->createAttribute("src");
			$src->value = $url;

			$script->appendChild($src);
			$dom->appendChild($script);

			$this->scripts[] = $dom->saveHTML();
		}

	}

?>