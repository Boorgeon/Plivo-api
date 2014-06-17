<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$call = new Boorgeon_Plivo_Call();
$call->setCallUuid('call_uuid');

$liveCall = $call->getLiveCall();

print_r($liveCall->toArray());
