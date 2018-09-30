<?php
echo ("getsms page ");
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC5a8d1323cf260a724a22087e86c15852";
$token  = "2a1bc8492c39afacd5813e77761adefb";
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+19173490168", // to
        array(
            "from" => "+19733632201",
            "body" => "Hello from Rohan Raygade CS 643 Fall 2018"
        )
    );

print($message->sid);
