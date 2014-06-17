<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$callDetails = new Boorgeon_Plivo_CallDetails();

$call = new Boorgeon_Plivo_Call();
$call->getAll($callDetails);

print_r($callDetails->toArray());
