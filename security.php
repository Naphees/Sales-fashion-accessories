 <?php
  session_start();
    if(isset($_SESSION['id1']))
        {
           
        }
        else
           {
            echo"fail";
            echo"<script> location.replace('main.php');  </script>";
           } 
           $server="localhost";
      $user="impprfrh_husen";
      $password="Husen_9997_bca";
      $db="impprfrh_i.m.p.db";
      $conn= new mysqli($server,$user,$password,$db)or die('connection erorrs');
           if(!$conn)
              {
                echo"fail connection";
              }
              else
                 {
                   
                 }
 ?>