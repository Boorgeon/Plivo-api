<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$application = new Boorgeon_Plivo_Application();
$application->setAppId('23584623515614093');

$application->get();

print_r($application->toArray());
