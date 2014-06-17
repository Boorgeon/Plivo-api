<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$conference = new Boorgeon_Plivo_Conference();
$conferences = $conference->getAll();

print_r($conferences->toArray());
