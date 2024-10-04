<?php 
  session_start();
  if(isset($_SESSION['id']))
    {
      
    }
    else
      {
          echo"<script>alert('your password or username is wrong '); </script>";
        echo"<script>location.replace('index.php');</script>";
      }
       $server="localhost";
      $user="impprfrh_husen";
      $password="Husen_9997_bca";
      $db="impprfrh_i.m.p.db";
      $conn= new mysqli($server,$user,$password,$db)or die('connection erorrs');
      if($conn->connect_error)
        {
          die("connection fail".$conn->connect_error);
        }
       else
        {
           
        }
/*

   */     
       
?>
