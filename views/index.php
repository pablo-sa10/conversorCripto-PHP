<?php

$req_url = 'https://v6.exchangerate-api.com/v6/ec99cb63be0eb0418ac6f46d/latest/USD';
$response_json = file_get_contents($req_url);

echo '<pre>';
echo $response_json;
echo '</pre>';
?>