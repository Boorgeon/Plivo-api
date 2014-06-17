<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$endpoint = new Boorgeon_Plivo_Endpoint();
$endpoint->setEndpointId('10367528881459');
$endpoint->setApplication('10339597341450531');

$endpoint->modify($endpoint);

print_r($endpoint->toArray());
