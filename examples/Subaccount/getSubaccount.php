<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$subaccount = new Boorgeon_Plivo_Subaccount();
$subaccount->setAuthId('SAYMJMMDKZZDC3NDIZNJ');

$subaccount->get();

print_r($subaccount->toArray());
