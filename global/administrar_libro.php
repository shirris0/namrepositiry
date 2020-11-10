<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');

$crud= new CrudLibro();
$libro= new Libro();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$target_dir = "/home";
		$file_name = $_FILES["fileToUpload"]["name"];
		$file_name = date("Ymdhms")."_".$file_name;
		$target_file = $target_dir.basename($file_name);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


		// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
				} else {
				echo "File is not an image.";
				$uploadOk = 0;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "wav" && $imageFileType != "avi") {
				echo "Sorry, lo siento este tipo de archivos no esta permitido.";
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					
				//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				} else {
				echo "Sorry, there was an error uploading your file.";
				}
			}
		
		$libro->setNombre($_POST['nombre']);
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
		$libro->setIdArchivo($file_name);
		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		header('Location: ../contacto.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}

	
?>