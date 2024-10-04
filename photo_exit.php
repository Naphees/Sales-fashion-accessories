<?php
 session_start();
 if(isset($_SESSION['id2']))
   {
     
   }
   else
     {
         echo"<script>alert('your password or username is wrong '); </script>";
       echo"<script>location.replace('photo_main.php');</script>";
     }
if(session_unset()==TRUE)
        {
           echo"<script>location.replace('photo_main.php');  </script>";
        }
?>