<?php 
include('keys/keys.php');

function validarToken($token){
    $google_token = $token;
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRETE_KEY."&response={$google_token}");
    $response = json_decode($response);
    $response = (array) $response;
    if($response['success'] && ($response['score']) && $response['score'] > 0.5){
        return true;
    }else{
        return false;
    }
}

?>