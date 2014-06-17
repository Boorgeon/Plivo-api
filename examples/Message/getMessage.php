<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$message = new Boorgeon_Plivo_Message();
$message->setRecordId('2487bbd4-ee22-11e3-96a2-22000ac78495');

$message->get();

print_r($message->toArray());
