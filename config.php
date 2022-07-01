
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1079643134516-foleohdgtqreqvnubc9edq64ts2k3nk9.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('7kyRQSghhzCkHlk_dtBncr2l');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/testephp/logado.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>