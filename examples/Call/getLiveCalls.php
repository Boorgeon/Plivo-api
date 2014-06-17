<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$liveCalls = new Boorgeon_Plivo_LiveCalls();

$call = new Boorgeon_Plivo_Call();
$call->getLiveCalls($liveCalls);

print_r($liveCalls->toArray());
