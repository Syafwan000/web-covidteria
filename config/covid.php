<?php 

function statikCovid($url) {
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($client, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($client, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $result = json_decode($response, true);

    return $result;
}

?>