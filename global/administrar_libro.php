<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
include_once '../mailer/contacto.php';
include('../hallazgos.php');

$crud= new CrudLibro();
$libro= new Libro();
	

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$target_dir =  "/home/nammagic/defensoresdelanaturaleza.mx/repositorioArchivos/";//getcwd();
		$file_name = $_FILES["fileToUpload"]["name"];
		$file_name = date("Ymdhms")."_".$file_name;
		$target_file = $target_dir.basename($file_name);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$path = getcwd();
		
		

		// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
				#echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				} else {
				#echo "File is not an image.";
				$uploadOk = 0;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				#echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				#echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "wav" && $imageFileType != "avi"
			&& $imageFileType != "docx" && $imageFileType != "pptx" && $imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "xls"
			&& $imageFileType != "pdf" && $imageFileType != "xlsx" ) {
				#echo "Sorry, lo siento este tipo de archivos no esta permitido.";
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				#echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				try {
					$retorno = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

				} catch (Exception $e) {
					die ('File did not upload: ' . $e->getMessage());
				}
				
				if ($retorno) {
					
				//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				} else {
				#echo "Sorry, there was an error uploading your file.";
				header('Location: https://defensoresdelanaturaleza.mx/');
				}
			}
			
		
		$libro->setNombre($_POST['nombre']);
		//$libro->setNombre($path);
		$libro->setPrimerApellido($_POST['primerApellido']);
		$libro->setSegundoApellido($_POST['segundoApellido']);
		$libro->setEmail($_POST['email']);
		$libro->setLugarDeTrabajo($_POST['lugarDeTrabajo']);
		$libro->setCodigoPostal($_POST['codigoPostal']);
		$libro->setEntidadFederativa($_POST['entidadFederativa']);
		$libro->setMunicipio($_POST['municipio']);
		$libro->setLocalidad($_POST['localidad']);
		$libro->setTelefono($_POST['telefono']);
		$libro->setTitulo($_POST['titulo']);
		$libro->setFechaReporte($_POST['fechaReporte']);
		$libro->setDescripcion($_POST['descripcion']);
		$libro->setObjetivoReporte($_POST['objetivoReporte']);
		$libro->setUnoa10($_POST['unoa10']);
		$libro->setDieza50($_POST['dieza50']);
		$libro->setMascincuenta($_POST['mas50']);
		//$libro->setEvidenciaPrivada($_POST['evidenciaPrivada']);
		$libro->setIdArchivo($file_name);
		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		
		/*
		header('Location: https://defensoresdelanaturaleza.mx/',true);
		phpAlert("El formulario ha sido enviado de forma correcta. Gracias!");
		exit();
		*/
		enviarRespuesta($_POST['email'], $_POST['nombre'], true);
		//enviarRespuesta($_POST['email'], $_POST['nombre'], false);
		
			
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	
	
	}
	die( 'OK');
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
?>