<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://stark-reef-82734.herokuapp.com/execute.php';
$BOT_TOKEN = '243388775:AAEN-FR3pfNmjK8ysk1RRKJZHijFXG6dfAA';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);
