<?php
require_once './sms.class.php';

$state = new \Sms\Xml\Incoming('login', 'password');
$state->setUrl('https://host/');
$state->setTime('2015-10-01 00:00:00');

if (!$state->send()) {
    echo $state->getError();
} else {
    print_r($state->getResponse());
}
