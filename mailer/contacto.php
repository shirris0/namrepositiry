<?php 

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host="mail.nammagicoymexicano.org";
$oMail->Port=465;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="contacto@nammagicoymexicano.org";
$oMail->Password="W1ls0nis9";
$oMail->setFrom("contacto@nammagicoymexicano.org","Hola soy Iris Wilson");
$oMail->addAddress("iriswilsonr@gmail.com","Wilson2");
$oMail->Subject="Hola iwilson";
$oMail->msgHTML("Hola soy un mensaje de prueba");

if(!$oMail->send()){
    echo $oMail->ErrorInfo;
}else{
    echo "Todo salio bien";
}

?>