<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', True);
	require '../vendor/autoload.php';
	use Abraham\TwitterOAuth\TwitterOAuth;
	session_start();
	$config = require 'config.php';

	//			Login Status
	if (
    empty($_SESSION['oauth_token']) ||
    empty($_SESSION['oauth_token_secret'])
	) {
		$logged_in_status = 'no';
	}
	else{
		$logged_in_status = 'yes';
		//Twitter Object
		$twitter = new TwitterOAuth(
			$config['consumer_key'],
			$config['consumer_secret'],
			$_SESSION['oauth_token'],
			$_SESSION['oauth_token_secret']
		);
		$post = filter_input(INPUT_POST, 'Tweet_Message');
		echo $post;
		if ($post){
			$statues = $twitter->post("statuses/update", ["status" => $post]);
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>TwitterOAuth</title>
	</head>
	<body>
		The User's IP Address is:
		<?php
			echo $_SERVER['SERVER_ADDR'];
		?>
		<form action="twitter_connect.php" method="POST">
		<input type="textbox" name="Tweet_Message">
		<input type = "submit"/>
		</form>
		<a href = "twitter_login.php">Login To Twitter</a>
		<div>
			Logged in? <?php echo $logged_in_status; ?>
		</div>
		<div>
			<a href = "logout.php">Logout</a>
		</div>
		<div> Session Status:
<?php
	echo session_status();
?>
			</div>
	</body>
</html>