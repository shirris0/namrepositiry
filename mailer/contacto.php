<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarRespuesta($email, $nombre, $reenvio){
    
        $oMail = new PHPMailer();
        $oMail->isSMTP();
        $oMail->Host="mail.defensoresdelanaturaleza.mx";
        $oMail->Port=587;
        $oMail->SMTPSecure="tls";
        $oMail->SMTPAuth=true;
        $oMail->Username="contacto@defensoresdelanaturaleza.mx";
        $oMail->Password="defensores2021.1";
        $oMail->setFrom("contacto@defensoresdelanaturaleza.mx","Defensores de la Naturaleza");
        if($reenvio == true){
            $oMail->addAddress($email,$nombre);
            $oMail->Subject="Gracias por comunicarte con Nosotros";
            $oMail->msgHTML("Tu participacion es escencial para salvar el planeta.");
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
        }else{
            
            $oMail->addAddress("iriswilsonr@gmail.com");
            $oMail->Subject = "Contacto Proceso Nacional de Reconciliación con la Naturaleza"; // Este es el titulo del email.
            $oMail->msgHTML("Hallazgos. Un usuario se contacto con nosotros.");
            $oMail->Body = "
            <html> 

                <body> 

                    <h1>Recibiste un nuevo mensaje desde la Plataforma del Proceso Nacional de Reconciliación con la Naturaleza</h1>

                    <p>Informacion enviada por el usuario de la web:</p>

                    <p>Nombre: {$nombre} ha capturado sus allazgos en la plataforma</p>

                    <p>Email: {$email}</p>

                

                </body> 

            </html>

            <br />
            "; 
            
        }
        

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