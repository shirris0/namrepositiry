<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarRespuesta($email, $nombre){
    
        $oMail = new PHPMailer();
        $oMail->isSMTP();
        $oMail->Host="mail.defensoresdelanaturaleza.mx";
        $oMail->Port=587;
        $oMail->SMTPSecure="tls";
        $oMail->SMTPAuth=true;
        $oMail->Username="contacto@defensoresdelanaturaleza.mx";
        $oMail->Password="sahuarodigital2021";
        $oMail->setFrom("contacto@defensoresdelanaturaleza.mx","Defensores de la Naturaleza");
        $oMail->addAddress($email,$nombre);
        $oMail->Subject="Gracias por comunicarte con Nosotros";
        $oMail->msgHTML("");
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

            $oMail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
        
        if(!$oMail->send()){
            echo $oMail->ErrorInfo;
        }else{
            return 1;
        }
    
    
}

?>