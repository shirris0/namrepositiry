<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarRespuesta($email, $nombre, $reenvio){
    if($reenvio == false){
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
    }else{
        $oMail = new PHPMailer();
        $oMail->isSMTP();
        $oMail->Host="mail.defensoresdelanaturaleza.mx";
        $oMail->Port=587;
        $oMail->SMTPSecure="tls";
        $oMail->SMTPAuth=true;
        $oMail->Username="contacto@defensoresdelanaturaleza.mx";
        $oMail->Password="sahuarodigital2021";
        $oMail->setFrom("contacto@defensoresdelanaturaleza.mx","Defensores de la Naturaleza");
        $oMail->addAddress("contacto@defensoresdelanaturaleza.mx");
        $oMail->addAddress("iriswilsonr@gmail.com");
        $oMail->Subject="Gracias por comunicarte con Nosotros";
        $oMail->msgHTML("");
        
        $oMail->Body = "
            <html> 

            <body> 
            
            <h1>Recibiste un nuevo mensaje desde la Plataforma del Proceso Nacional de Reconciliación con la Naturaleza</h1>
            
            <p>Informacion enviada por el usuario de la web:</p>
            
            <p>Nombre: {$nombre}, ha capturado sus hallazgos en la plataforma.</p>
            
            <p>Email: {$email}</p>
            
            
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
    
}

?>