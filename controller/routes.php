<?php
	define('PROJECT_FOLDER_NAME', str_replace('/', '', dirname($_SERVER['SCRIPT_NAME'])));
	define('PROJECT_FOLDER_PATH', '/' . str_replace('/', '', dirname($_SERVER['SCRIPT_NAME'])));
	class Route {
		// Nombre del directorio del proyecto
		protected $folderProject;
		// Ruta completa del proyecto
		protected $basePath;
		// Las rutas actuales del proyecto (array)
		protected $pointer;
		// El protocolo HTTP actual del servidor
		protected $protocol;
		// Primer ruta del servidor
		protected static $firstRoute;
		// Ultima ruta del servidor
		protected static $currentRoute;

		public function __construct(){
			$this->folderProject= str_replace('/', '', dirname($_SERVER['SCRIPT_NAME']));
			$this->basePath= $_SERVER['SCRIPT_NAME'];
			$this->pointer= explode('/', str_replace('/'.$this->folderProject.'/', '', $_SERVER['REQUEST_URI']));
			$this->protocol= $_SERVER['SERVER_PROTOCOL'];
		}

		public function verify($routeName) : bool {
			return (in_array($routeName, $this->pointer)) ? true : false;
		}

		public function start(){
			if( !is_file( $this->pointer[count($this->pointer) - 1] ) ){
				self::$firstRoute= $this->pointer[0];
				self::$currentRoute= (count($this->pointer)>0) ? $this->pointer[count($this->pointer) - 1] : $primerRuta;
			}else{
				die('<p style="font-size:1.17rem">La ruta a la que intentas acceder pertenece a un archivo.. Deberás crear una función en Controller_Views para poder mostrar su contenido.</p>');
			}
		}
	}
?>