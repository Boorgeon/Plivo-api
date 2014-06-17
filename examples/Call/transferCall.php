<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$callTransfer = new Boorgeon_Plivo_CallTransfer();
$callTransfer->setLegs('aleg');

$call = new Boorgeon_Plivo_Call();
$call->setCallUuid('call_uuid');

$call->transfert($callTransfer);

print_r($callTransfer->toArray());
