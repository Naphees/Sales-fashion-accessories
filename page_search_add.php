<?php
require('security.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <title>page add </title>
         <?php require('design.php'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                require('left1.php');
                require('search1.php');// or die('file not include');
                
            ?>
            <hr>
        </div>
    </body>
</html>