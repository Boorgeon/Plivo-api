<?php

require_once realpath(dirname(__FILE__) . '/init.php');

$user = new Boorgeon_Plivo_Response_User();
$user->setValue('sip:john12256267278@phone.plivo.com');

$number = new Boorgeon_Plivo_Response_Number();
$number->setValue('15677654321');

$dial = new Boorgeon_Plivo_Response_Dial();
$dial->setValue(array($user, $number));

$response = new Boorgeon_Plivo_Response();
$response->addElement($dial);

file_put_contents('testResponse.xml', $response);
echo $response;
