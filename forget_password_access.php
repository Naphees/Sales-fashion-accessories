<?php
 
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
        $email= htmlspecialchars($_POST['email']) or die('date access errors');
         $sql= "SELECT * FROM customer WHERE email='".$email."'  ";
         $result=$conn->query($sql);
                    if($result->num_rows>0)
                       { 
                            $row=$result->fetch_assoc() or die('fetch');
                          
                            
                            $to = $row['email'];
$subject = "Username and password";
$txt = "username = ".$row['name']."\n password= ".$row['password']."\n\n\n do not share username and password to other";

if(mail($to,$subject,$txt)==TRUE)
   {
        echo"<script> alert('your username and password successfully send your email ');     </script>       ";
        echo"<script>alert('please, check your email');</script>";
                           echo"<script> location.replace('index.php');                </script>";
   }

                       }                         
                            
                                
                       
                    else
                       {
                        echo"<script> alert('your mobile number is incorrect ');     </script>       ";
                           echo"<script> location.replace('index.php');                </script>";
                         
                       }
        
?>
