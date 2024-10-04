<?php 
   require('security.php');
    $id=htmlspecialchars($_REQUEST['id']);
    echo $id;
    $join="join";
    $sql="UPDATE `customer` SET `join`='".$join."' WHERE `id`='".$id."'   ";
    if($conn->query($sql)==TRUE)
       {
         echo"<script>alert('successfully join');</script>"; 
         echo"<script>location.replace('purchaser_request.php');</script>";
           
       }
       else
       {
           echo"<script>alert('Sorry , No allow');</script>"; 
         echo"<script>location.replace('purchaser_request.php');</script>";
            
       }
?>