<?php

require_once '../vendor/autoload.php';

$clientID = "155425827857-ontcrbo4t0kb6jbhve3tqt02910ikij6.apps.googleusercontent.com";
$clientSecret = "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";
$redirectUrl = "http://localhost/api/login/index.php";

// set client goolge
$client = new Google_Client();
$client->setClientID($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);

$client->addScope("profile");
$client->addScope("email");

session_start();