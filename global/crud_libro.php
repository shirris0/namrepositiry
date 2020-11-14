<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudLibro{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO 
			tblFormulario 
			(fecha,nombre,primerApellido,segundoApellido,email,lugarDeTrabajo,codigoPostal,entidadFederativa,municipio,localidad,telefono,titulo,fechaReporte,descripcion,objetivoReporte,1a10,10a50,50mas,idArchivos) 
			values 
			(:fecha,:nombre,:primerApellido,:segundoApellido,:email,:lugarDeTrabajo,:codigoPostal,:entidadFederativa,:municipio,:localidad,:telefono,:titulo,:fechaReporte,:descripcion,:objetivoReporte,:unoa10,:dieza50,:mas50,:idArchivo)');
			$insert->bindValue('fecha',date("Y/m/d"));
			$insert->bindValue('nombre',$libro->getNombre());
			$insert->bindValue('primerApellido',$libro->getPrimerApellido());
			$insert->bindValue('segundoApellido',$libro->getSegundopellido());
			$insert->bindValue('email',$libro->getEmail());
			$insert->bindValue('lugarDeTrabajo',$libro->getLugarDeTrabajo());
			$insert->bindValue('codigoPostal',$libro->getCodigoPostal());
			$insert->bindValue('entidadFederativa',$libro->getEntidadFederativa());
			$insert->bindValue('municipio',$libro->getMunicipio());
			$insert->bindValue('localidad',$libro->getLocalidad());
			$insert->bindValue('telefono',$libro->getTelefono());
			$insert->bindValue('titulo',$libro->getTitulo());
			$insert->bindValue('fechaReporte',$libro->getFechaReporte());
			$insert->bindValue('descripcion',$libro->getDescripcion());
			$insert->bindValue('objetivoReporte',$libro->getObjetivoReporte());
			$insert->bindValue('unoa10',$libro->getUnoa10());
			$insert->bindValue('dieza50',$libro->getDieza50());
			$insert->bindValue('mas50',$libro->getMascincuenta());
			//$insert->bindValue('evidenciaPrivada',$libro->getEvidenciaPrivada());
			$insert->bindValue('idArchivo',$libro->getIdArchivo());
			$insert->execute();
			
		}

		
	}
?>