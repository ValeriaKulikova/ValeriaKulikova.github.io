<?php

$url = $_GET['url'];

$ch = curl_init();

$postdata = file_get_contents("php://input");

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     $postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain'));

$response = curl_exec($ch);

echo $response;
