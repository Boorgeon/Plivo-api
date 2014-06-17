<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$subaccounts = new Boorgeon_Plivo_Subaccounts();

$subaccount = new Boorgeon_Plivo_Subaccount();
$subaccount->getAll($subaccounts);

print_r($subaccounts->toArray());
