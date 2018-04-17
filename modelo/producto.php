<?php
	class Producto {
		//Propiedades
		private $nombre = null;
		private $precio = 0;
		private $stock = 0;

		//Constructor
		public function __construct($nombre = null, $precio = 0, $stock = 0){
			$this->nombre = $nombre;
			$this->precio = $precio;
			$this->stock = $stock;
		}

		public function getProducto(){
			return (array) $this;
		}
	}

?>