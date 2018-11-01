<?php
$url  = 'https://data.ny.gov/api/views/d6yy-54nr/rows.json?accessType=DOWNLOAD';
$path = 'rows.json';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

curl_close($ch);

file_put_contents($path, $data);

?>