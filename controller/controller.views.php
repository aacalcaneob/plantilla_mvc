<?php
	require 'routes.php';
	class Controller_Views extends Route {

		private $mainView= 'view/inicio.php';

		public function __construct(){
			parent::__construct();
		}

		public function inicio(){
			return 'view/inicio.php';
		}

		public function catalogo_productos(){
			require 'model/producto.model.php';
			// Cargar Productos y mostrar en la pagina..
			// $producto= new Producto();
			// $listaProductos= $producto->obtenerProductos();
			return 'view/catalogo/productos1.php';
		}

		public function nosotros(){
			return 'view/nosotros.php';
		}

		public function contacto(){
			return 'view/contacto.php';
		}

		public function aviso_privacidad(){
			return 'view/aviso_privacidad.php';
		}

		public function run(){
			parent::start();
			/**
			 *	Coloca aquí tus rutas que corresponden a las views a mostrar en tu página...
			*/
			switch (parent::$currentRoute) {
				/**
				 *	Rutas de la página..
				*/
				case 'inicio':
					include $this->inicio();
				break;
				case 'contacto':
					include $this->contacto();
				break;
				case 'nosotros':
					include $this->nosotros();
				break;
				case 'aviso_de_privacidad':
					include $this->aviso_privacidad();
				break;
				case 'catalogo':
					include $this->catalogo_productos();
				break;
				/**
				 *	Excepciones de Rutas..
				*/
				case '':
					include $this->mainView;
				break;
				default:
					include 'view/404.php';
				break;
			}
		}
	}