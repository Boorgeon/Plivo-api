<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$callSpeak = new Boorgeon_Plivo_CallSpeak();
$callSpeak->setText('Text to be played');
$callSpeak->setVoice('WOMAN');
$callSpeak->setLanguage('fr-FR');

$call = new Boorgeon_Plivo_Call();
$call->setCallUuid('call_uuid');

$call->speak($callSpeak);
//$call->stopSpeaking();

print_r($callSpeak->toArray());
