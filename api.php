<?php

$ch = curl_init();
$headers  = [
             
            'Content-Type: text/plain'
        ];
$postData = file_get_contents("php://input");
curl_setopt($ch, CURLOPT_URL,"http://18.168.83.39/api/v1/emara/api.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$postData);           
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result     = curl_exec ($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo $result;
?>