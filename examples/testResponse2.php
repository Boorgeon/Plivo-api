<?php

require_once realpath(dirname(__FILE__) . '/init.php');

$response = new Boorgeon_Plivo_Response();

$preanswer = $response->preanswer();
$preanswer->play('https://s3.amazonaws.com/plivocloud/Trumpet.mp3');

$response->speak('Hey, thanks for dropping by');
$response->hangup();

file_put_contents('testResponse2.xml', $response);
echo $response;
