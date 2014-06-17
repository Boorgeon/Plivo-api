<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$messages = new Boorgeon_Plivo_Messages();

$message = new Boorgeon_Plivo_Message();
$message->getAll($messages);

print_r($messages->toArray());
