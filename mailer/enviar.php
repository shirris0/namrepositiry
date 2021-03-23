<?php
require("class.phpmailer.php");
require("class.smtp.php");
include_once 'contacto.php';
include('../reCaptcha.php');
if(!validarToken($_POST['token-google'])){
    die('Eres un Robot');
}else{
    if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"])  || !isset($_POST["message"]) ) {
        die ("Es necesario completar todos los datos del formulario");
    }else{
        $nombre = $_POST["name"];
        $email = $_POST["email"];
        $emailContent = $_POST["email"];
        $asunto = $_POST["subject"];
        $mensaje = $_POST["message"];
        $destinatario = "info@defensoresdelanaturaleza.mx";
        //variables para los datos del archivo
        $nameFile = $_FILES['adjunto']['name'];
        $sizeFile = $_FILES['adjunto']['size'];
        $typeFile = $_FILES['adjunto']['type'];
        $tempFile = $_FILES["adjunto"]["tmp_name"];
        $fecha= time();
        $fechaFormato = date("j/n/Y",$fecha);
        /*
        $fp = fopen($tempFile, "rb");
        $file = fread($fp, $sizeFile);
        $file = chunk_split(base64_encode($file));
        */
        // Datos de la cuenta de correo utilizada para enviar v�a SMTP
        $smtpHost = "mail.defensoresdelanaturaleza.mx";  // Dominio alternativo brindado en el email de alta 
        //$smtpHost="smtp.gmail.com";
        $smtpUsuario = "info@defensoresdelanaturaleza.mx";  // Mi cuenta de correo
        //$smtpUsuario = "rleyvacastro@gmail.com";
        $smtpClave = '_y(a{;M-rH5{';  
        //$smtpClave = "tyrant-003";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587; 
        $mail->IsHTML(true); 
        $mail->CharSet = "utf-8";
        // VALORES A MODIFICAR //
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;
        $mail->addAttachment($tempFile,$nameFile);
        $mail->From = $email; // Email desde donde env�o el correo.
        $mail->FromName = $nombre;
        $mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario
        //$mail->AddAddress("iriswilsonr@gmail.com");
        $mail->Subject = "Contacto Proceso Nacional de Reconciliación con la Naturaleza"; // Este es el titulo del email.
        $mensajeHtml = nl2br($mensaje);
        $mail->Body = "
        <html> 
        <body> 
        <h1>Recibiste un nuevo mensaje desde la Plataforma del Proceso Nacional de Reconciliación con la Naturaleza</h1>
        <p>Informacion enviada por el usuario de la web:</p>
        <p>Nombre: {$nombre}</p>
        <p>Email: {$emailContent}</p>
        <p>Asunto: {$asunto}</p>
        <p>Mensaje: {$mensaje}</p>
        </body> 
        </html>
        <br />"; // Texto del email en formato HTML
        $mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
        // FIN - VALORES A MODIFICAR //
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $estadoEnvio = $mail->Send(); 
        if($estadoEnvio){
            enviarRespuesta($_POST["email"], $_POST["name"],true);
            die( 'OK');
        }else{
            die( 'Unable to load the "PHP Email Form" Library!' . $estadoEnvio);
        }
     }
}

















?>


