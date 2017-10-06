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
    </body>
</html>