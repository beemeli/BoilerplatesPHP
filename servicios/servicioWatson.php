<?php

//SERVICIO. Llamado con POST.
ini_set('display_errors', 1);
error_reporting(E_ALL);

$pregunta = $_POST['pregunta'];


$username = 'udem_student21';
$password = 'kGytpsPu';
$URL = 'https://dal09-gateway.watsonplatform.net/instance/582/deepqa/v1/question';



$curl = curl_init();
$post_args = array(
    'body' => $pregunta
);
$header_args = array(
    'Content-Type: application/json; charset=utf-8',
    'Accept: application/json'
);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_args);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, 'udem_student21 : kGytpsPu');
curl_setopt($curl, CURLOPT_URL, 'https://dal09-gateway.watsonplatform.net/instance/582/deepqa/v1/question');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

if(curl_error($curl))
{
    echo 'error:' . curl_error($curl);
}


curl_close($curl);

$decoded = json_decode($result, true);
?>