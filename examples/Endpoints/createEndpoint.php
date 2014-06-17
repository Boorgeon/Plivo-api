<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$endpoint = new Boorgeon_Plivo_Endpoint();
$endpoint->setUsername('john');
$endpoint->setPassword('john');
$endpoint->setAlias('JOHN');
$endpoint->setAppId('10339597341450531');

$endpoint->create();

print_r($endpoint->toArray());
