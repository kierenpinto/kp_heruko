<?php
    error_reporting(E_ALL);
	ini_set('display_errors', True);
	require '../vendor/autoload.php';
	use Abraham\TwitterOAuth\TwitterOAuth;
    session_start();
/* 	session_unset();
    session_reset();
    session_abort(); */
    session_destroy();
    session_register_shutdown();

	$config = require 'config.php';

/* 	//			Login Status
	if (
    empty($_SESSION['oauth_token']) ||
    empty($_SESSION['oauth_token_secret'])
	) {
		$logged_in_status = 'no';
	}
	else{
		$logged_in_status = 'yes';
	} */
    //echo session_status();
    header('Location: '. 'index.php');
?>