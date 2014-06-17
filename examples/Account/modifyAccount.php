<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$account = new Boorgeon_Plivo_Account();
$account->setCity('CENTRE');

$account->modify();

print_r($account->toArray());
