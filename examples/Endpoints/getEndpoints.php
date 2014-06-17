<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$endpoints = new Boorgeon_Plivo_Endpoints();

$endpoint = new Boorgeon_Plivo_Endpoint();
$endpoint->getAll($endpoints);

print_r($endpoints->toArray());
