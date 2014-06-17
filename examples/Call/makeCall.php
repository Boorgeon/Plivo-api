<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$call = new Boorgeon_Plivo_Call();
$call->setFrom('15677654321');
$call->setTo('sip:john12256267278@phone.plivo.com');
$call->setAnswerUrl('http://example.com/plivo/test/anwser_url.php');
$call->setRingUrl('http://example.com/plivo/test/ring_url.php');
$call->setFallbackUrl('http://example.com/plivo/test/fallback_url.php');
$call->setHangupUrl('http://example.com/plivo/test/hangup_url.php');
$call->setCallerName('John');
$call->setTimeLimit(30);

$call->make();

print_r($call->toArray());
