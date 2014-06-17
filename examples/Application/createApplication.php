<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$application = new Boorgeon_Plivo_Application();
$application->setAppName('Keyo');
$application->setAnswerUrl('http://example.com/plivo/anwser_url.php');
$application->setHangupUrl('http://example.com/plivo/hangup_url.php');

$application->create();

print_r($application->toArray());
