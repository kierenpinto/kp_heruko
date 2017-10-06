<?php 
error_reporting(E_ALL);
ini_set('display_errors', True);
require '../vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

$config = require 'config.php';
if (0){
$connection = new TwitterOAuth('P3FERDWse0tucaJUPMy0efkOl', 'zbsntzxwmPgVTWMUWsCT8Ggg5j3ZvSGepxZ5MNkg9q1ay661jb', '307302171-YF7cfY22lH2MmPMb5GhQjqO57GORnkTqGujlA5zG', 'ASk02LyMTRcDKI82FLLwIt1jJucI7vkwrkz5O0gvtFhPf');
$content = $connection->get("account/verify_credentials");
$statues = $connection->post("statuses/update", ["status" => "This is a test string"]);
}
$connection = new TwitterOAuth('P3FERDWse0tucaJUPMy0efkOl', 'zbsntzxwmPgVTWMUWsCT8Ggg5j3ZvSGepxZ5MNkg9q1ay661jb', '307302171-YF7cfY22lH2MmPMb5GhQjqO57GORnkTqGujlA5zG', 'ASk02LyMTRcDKI82FLLwIt1jJucI7vkwrkz5O0gvtFhPf');
$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => 'http://www.google.com'));

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
echo $config['url_callback'];
?>
<form action="index.php" method="POST">

<input type="textbox" name="Tweet_Message">
</form>
<a href = "twitter_login.php">Login To Twitter</a>
</body>
</html>