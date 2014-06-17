<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$recording = new Boorgeon_Plivo_Recording();
$recording->setRecordingId('recording_id');

$recording->get();

print_r($recording->toArray());
