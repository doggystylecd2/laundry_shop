<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC5abc09ad72f3e8650d6f9f820adaea27';
$token = '926bc7c3731552ed65b34297547f8933';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$twillo_number =  '+13023432171';
$phone_number = '+639755983121';
$client->messages->create(
    // the number you'd like to send the message to
    $phone_number,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => $twillo_number,
        // the body of the text message you'd like to send
        'body' => 'Hey Marvin Villanea! Good luck on the bar exam!... This is marvin the Second'
    ]
);