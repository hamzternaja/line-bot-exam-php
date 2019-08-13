<?php
$access_token = '0aIL6/83MxgD3HeeKvYAoD+ihD90aVvjYkeHmqKusaP5OfUOlu2ogFLygeI/Y4m9AZ58D+SVz4jM7xC0hRgY/nrWOKZdBZIIEg4nYGDT+Cnv+TF0IbriFNL9CKI4jE3vAJoVi6ZRvLmbgxv4P/YEBAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
