<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$conferenceMember = new Boorgeon_Plivo_ConferenceMember();
$conferenceMember->setMemberId('member_id');

$conference = new Boorgeon_Plivo_Conference();
$conference->setConferenceName('conference_name');

$conference->hangupMember($conferenceMember);

print_r($conference->toArray());
