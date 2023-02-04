<?php
	class Producto{
		private $nombre;
		private $categoria;
		private $unidades;
		private $precio;
		private $fecha;

		public function __construct(){
			$this->nombre= "";
			$this->categoria= "";
			$this->unidades= "";
			$this->precio= 0.00;
			$this->fecha= "0000-00-00";
		}

		public function obtenerProductos() : array {
			require 'database.php';

			$db= new Database();
			$query= "SELECT * FROM productos";

			return $db->get_data($query);
		}

		public function setNombre($nombre){
			$this->nombre= $nombre;
		}

		public function getNombre() : string {
			return $this->nombre;
		}

		public function setCategoria($categoria){
			$this->categoria= $categoria;
		}

		public function getCategoria() : string {
			return $this->categoria;
		}

		public function setUnidades($unidades){
			$this->unidades= $unidades;
		}

		public function getUnidades() : int {
			return $this->unidades;
		}

		public function setPrecio($precio){
			$this->precio= $precio;
		}

		public function getPrecio() : float {
			return $this->precio;
		}

		public function setFecha($fecha){
			$this->fecha= $fecha;
		}

		public function getFecha() : string {
			return $this->fecha;
		}

	}