<?php
 require('connection.php');
if(session_unset()==TRUE)
        {
           echo"<script>location.replace('index.php');  </script>";
        }
?>