<?php
 require('security.php');
if(session_unset()==TRUE)
        {
           echo"<script>location.replace('main.php');  </script>";
        }
?>