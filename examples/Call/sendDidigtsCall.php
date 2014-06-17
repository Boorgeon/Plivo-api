<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$callDtmf = new Boorgeon_Plivo_CallDtmf();
$callDtmf->setDigits('A');

$call = new Boorgeon_Plivo_Call();
$call->setCallUuid('call_uuid');

$call->sendDigits($callDtmf);

print_r($callDtmf->toArray());
