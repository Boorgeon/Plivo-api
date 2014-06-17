<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$applications = new Boorgeon_Plivo_Applications();
$applications->setSubaccount('SANZK2MJG5ZDDJMGQWMZ');

$application = new Boorgeon_Plivo_Application();
$application->getAll($applications);

print_r($applications->toArray());
