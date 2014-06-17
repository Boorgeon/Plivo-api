<?php

require_once realpath(dirname(__FILE__) . '/../init.php');

Boorgeon_Plivo::factory(array(
    'auth_id' => 'PLIVO_AUTH_ID',
    'auth_token' => 'PLIVO_AUTH_TOKEN'
));

$message = new Boorgeon_Plivo_Message();
$message->setSrc('BOORGEON');
$message->setDst('15677654321');
$message->setText('hello');

$message->send();

print_r($message->toArray());
