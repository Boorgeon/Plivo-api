<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$recordings = new Boorgeon_Plivo_Recordings();
$recordings->setSubaccount('subaccount');

$recording = new Boorgeon_Plivo_Recording();
$recording->getAll($recordings);

print_r($recordings->toArray());
