<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarRespuesta($email, $nombre){
    $oMail = new PHPMailer();
    $oMail->isSMTP();
    $oMail->Host="mail.nammagicoymexicano.org";
    $oMail->Port=465;
    $oMail->SMTPSecure="tls";
    $oMail->SMTPAuth=true;
    $oMail->Username="contacto@nammagicoymexicano.org";
    $oMail->Password="M7P?V+DVn!xv";
    $oMail->setFrom("contacto@nammagicoymexicano.org","Defensores de la Naturaleza");
    $oMail->addAddress($email,$nombre);
    $oMail->Subject="Gracias por comunicaste con Nosotros";
    $oMail->msgHTML("Hola soy un mensaje de prueba");
    $oMail->AddEmbeddedImage('../assets/img/respuesta/Gracias-por-escribirnos.jpg', 'gracias');
    $oMail->Body = "
        
        <html> 
        <body>
            <div align='center'>
            <a href='http://defensoresdelanaturaleza.mx/'><img src='cid:gracias'></a>
            </div>
        </body> 
    
        </html>
    
        <br />
        
        ";
    
    if(!$oMail->send()){
        echo $oMail->ErrorInfo;
    }
}

?>