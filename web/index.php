<?php
$txt = 'Hello Everyone!'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Test PHP File
        </title>
    </head>
    <body>
        This is a text test: </br>
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