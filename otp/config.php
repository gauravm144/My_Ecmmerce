<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('769771181423-q6r0calhe4sk1gl4k7tdseccevsi8hm8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('NMLaJHqMxtpp1VNnUfCOnZD6');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/otp/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 