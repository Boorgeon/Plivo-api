<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$callPlay = new Boorgeon_Plivo_CallPlay();
$callPlay->setLoop(true);
$callPlay->setUrls('https://s3.amazonaws.com/plivocloud/Trumpet.mp3');

$call = new Boorgeon_Plivo_Call();
$call->setCallUuid('call_uuid');

$call->play($callPlay);
//$call->stopPlaying();

print_r($callPlay->toArray());
