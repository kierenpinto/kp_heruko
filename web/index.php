<?php
//session_start();
require_once '../vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
$oauth_verifier = filter_input(INPUT_GET, 'oauth_verifier');
$txt = $oauth_verifier;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Test PHP File
        </title>
    </head>
    <body>
        <div>
        Sign in with Twitter:
            <div>
                <a href="twitter_connect.php">Sign In</a>
            </div>
        </div>

        This is a text test: 
        </br>
        <?php echo $txt ?> 
        <br/>
        The directory is: <?php echo __DIR__; ?>
        </br>
        <?php
            $query = $_SERVER['PHP_SELF'];
            $path = pathinfo( $query );
            $what_you_want = $path['dirname'];
            echo $what_you_want;
        ?>
        <br/>
        <?php
            $filename = basename($_SERVER['REQUEST_URI']);
            echo $filename;
        ?>
    </body>
</html>