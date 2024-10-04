<?php
  require('connection.php');
  
   $sql="SELECT * FROM `produce` WHERE `rate` IS NOT NULL && (`produce` LIKE '%toy%' ||`produce` LIKE '%toys%' || `produce` LIKE '%khilone%' || `produce` LIKE '%kilone%' || `produce` LIKE '%toyses%') ";
  $produce= "produce_categories_image/toys.webp" ;
        require('produce_frame.php');
 
?>