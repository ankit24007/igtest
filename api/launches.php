<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.spacexdata.com/v3/launches");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);

$data = json_decode($output);

$page = $_GET['page'] ?? 0;
$size = $_GET['size'] ?? 0;

$page = $page - 1;

if($page < 0){
    $page = 0;
}

$offset = $page * $size;

if($offset > 0 || $size > 0){
    $data = array_slice($data, $offset, $size);
}

echo json_encode($data);