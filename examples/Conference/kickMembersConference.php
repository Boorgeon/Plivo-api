<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$conferenceMembers = new Boorgeon_Plivo_ConferenceMembers();
$conferenceMembers->addMember('10');
$conferenceMembers->addMember('11');

$conference = new Boorgeon_Plivo_Conference();
$conference->setConferenceName('conference_name');

$conference->kickMembers($conferenceMembers);

print_r($conference->toArray());
