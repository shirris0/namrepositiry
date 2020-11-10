<?php
	class Libro{
		private $id;
		private $nombre;
		private $primerApellido;
		private $segundoApellido;
		private $email;
		private $lugarDeTrabajo;
		private $codigoPostal;
		private $entidadFederativa;
		private $municipio;
		private $localidad;
		private $telefono;
		private $titulo;
		private $fechaReporte;
		private $descripcion;
		private $objetivoReporte;
		private $unoa10;
		private $dieza50;
		private $mascincuenta;
		private $idArchivo;
		private $autor;
		private $anio_edicion;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getPrimerApellido(){
		return $this->primerApellido;
		}

		public function setPrimerApellido($primerApellido){
			$this->primerApellido = $primerApellido;
		}

		public function getSegundopellido(){
		return $this->segundoApellido;
		}
	
		public function setSegundoApellido($segundoApellido){
			$this->segundoApellido = $segundoApellido;
		}
		
		public function getEmail(){
		return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getLugarDeTrabajo(){
		return $this->lugarDeTrabajo;
		}

		public function setLugarDeTrabajo($lugarDeTrabajo){
			$this->lugarDeTrabajo = $lugarDeTrabajo;
		}

		public function getEntidadFederativa(){
		return $this->entidadFederativa;
		}

		public function setEntidadFederativa($entidadFederativa){
			$this->entidadFederativa = $entidadFederativa;
		}

		public function getCodigoPostal(){
		return $this->codigoPostal;
		}

		public function setCodigoPostal($codigoPostal){
			$this->codigoPostal = $codigoPostal;
		}
	
		public function getMunicipio(){
		return $this->municipio;
		}

		public function setMunicipio($municipio){
			$this->municipio = $municipio;
		}

		public function getLocalidad(){
		return $this->localidad;
		}

		public function setLocalidad($localidad){
			$this->localidad = $localidad;
		}

		public function getTelefono(){
		return $this->telefono;
		}

		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getTitulo(){
		return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getFechaReporte(){
		return $this->fechaReporte;
		}

		public function setFechaReporte($fechaReporte){
			$this->fechaReporte = $fechaReporte;
		}

		public function getDescripcion(){
		return $this->descripcion;
		}

		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getObjetivoReporte(){
		return $this->objetivoReporte;
		}

		public function setObjetivoReporte($objetivoReporte){
			$this->objetivoReporte = $objetivoReporte;
		}

		public function getUnoa10(){
		return $this->unoa10;
		}

		public function setUnoa10($unoa10){
			$this->unoa10 = $unoa10;
		}

		public function getDieza50(){
		return $this->dieza50;
		}

		public function setDieza50($dieza50){
			$this->dieza50 = $dieza50;
		}

		public function getMascincuenta(){
		return $this->mascincuenta;
		}

		public function setMascincuenta($mascincuenta){
			$this->mascincuenta = $mascincuenta;
		}

		public function getIdArchivo(){
		return $this->idArchivo;
		}

		public function setIdArchivo($idArchivo){
			$this->idArchivo = $idArchivo;
		}






















		public function getAutor(){
			return $this->autor;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}

		public function getAnio_edicion(){
		return $this->anio_edicion;
		}

		public function setAnio_edicion($anio_edicion){
			$this->anio_edicion = $anio_edicion;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>