<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$endpoint = new Boorgeon_Plivo_Endpoint();
$endpoint->setEndpointId('33335264739710');

$endpoint->get();

print_r($endpoint->toArray());
