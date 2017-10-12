<?php
 
require_once '../vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
 
session_start();
$config = require_once 'config.php';
$oauth_verifier = filter_input(INPUT_GET, 'oauth_verifier');

//Check to make sure the callback received the oAuth Token
if (empty($oauth_verifier) ||
    empty($_SESSION['oauth_token_request']) ||
    empty($_SESSION['oauth_token_secret_request'])
) {
    // something's missing, go and login again
    header('Location: ' . $config['url_login']);
}
// connect with application token
$connection = new TwitterOAuth(
    $config['consumer_key'],
    $config['consumer_secret'],
    $_SESSION['oauth_token_request'],
    $_SESSION['oauth_token_secret_request']
);
// request user token
$token = $connection->oauth(
    'oauth/access_token', [
        'oauth_verifier' => $oauth_verifier
    ]
);
$_SESSION['oauth_token']=$token['oauth_token'];
$_SESSION['oauth_token_secret']=$token['oauth_token_secret'];
$twitter = new TwitterOAuth(
    $config['consumer_key'],
    $config['consumer_secret'],
    $_SESSION['oauth_token'],
    $_SESSION['oauth_token_secret']
);
$url = "twitter_connect.php";
header('Location: '. $url);
?>