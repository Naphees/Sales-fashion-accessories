<?php
  require('connection.php');
  
   $sql="SELECT * FROM `produce` WHERE `rate` IS NOT NULL && (`produce` LIKE '%pot%' ||`produce` LIKE '%poot%' || `produce` LIKE '%put%' || `produce` LIKE 'pot%' || `produce` LIKE '%pot%') ";
  $produce= "produce_categories_image/toys.webp" ;
    require('produce_frame.php');
 
?>