<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$conferenceRecord = new Boorgeon_Plivo_ConferenceRecord();
$conferenceRecord->setFileFormat('mp3');
$conferenceRecord->setCallbackMethod('POST');

$conference = new Boorgeon_Plivo_Conference();
$conference->setConferenceName('conference_name');

$conference->record($conferenceRecord);
//$conference->stopRecording();

print_r($conferenceRecord->toArray());
