<?php
/**
 * Questa classe serve a fare le chiamate alle api.
 *
 * Le chiamate ajax devono avere questi dati
 *
 * url: "controllers/ApiManager.php",
 * data: {
 * endpoint: "http://localhost:8001/{endpoint}",
 * method: 'GET',
 * parameters: {
 * title: 'title',
 * limit: 10
 * }
 *
 * User: laura
 * Date: 6/10/2017
 * Time: 6:53 PM
 */

$endpoint = $_REQUEST['endpoint'];
$method = $_REQUEST['method'];
$parameters = $_REQUEST['parameters'];
if(!$endpoint || !$method){
    die("missing parameters");
}

if($parameters){
    $result = make_request($endpoint, $method, $parameters);
} else {
    $result = make_request($endpoint, $method);
}

die($result);

function make_request($endpoint, $method, $parameters = []){
    $curl = curl_init();
    $params = [];
    foreach ($params as $key => $param) {
        $params[] = $key . ": " . $param;
    }
    curl_setopt_array($curl, array(
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => $params
    ));

    return curl_exec($curl);
}