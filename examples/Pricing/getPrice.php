<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$pricing = new Boorgeon_Plivo_Pricing();
$pricing->setCountryIso('CM');

$pricing->get();

print_r($pricing->toArray());
