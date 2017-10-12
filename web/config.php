<?php
$root_site = pathinfo($_SERVER['PHP_SELF'])['dirname'];

 $callback_url = 'http://'.$_SERVER['SERVER_NAME'].$root_site.'/twitter_callback.php';
 $login_url = 'http://'.$_SERVER['SERVER_NAME'].$root_site.'/twitter_connect.php';
 $home_url = 'http://'.$_SERVER['SERVER_NAME'].$root_site.'/twitter_connect.php';
return [
    //
    'consumer_key'      => 'P3FERDWse0tucaJUPMy0efkOl',
    'consumer_secret'   => 'zbsntzxwmPgVTWMUWsCT8Ggg5j3ZvSGepxZ5MNkg9q1ay661jb',
 
    //
    'url_login'         => $login_url,
    'url_callback'      => $callback_url,
];
?>