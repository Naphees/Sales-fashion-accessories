<?php
    require('connection.php');
    $complain=htmlspecialchars($_POST['complain']);
     echo $complain;
     $mobile=htmlspecialchars($_POST['mobile']);
      echo $mobile;
      $time=date("h:i:s") or die('time errors');
      $date=date("d-m-y") or die('date errors');
      $sql="INSERT INTO `complain`(`customer_id` , `complain` , `mobile` , `time`, `date` ,`customer` ) VALUES('".$_SESSION['id']."', '".$complain."', '".$mobile."', '".$time."', '".$date."' , '".$_SESSION['name']."' )";
        if($conn->query($sql)===TRUE)
            {
              
                     echo"<script>window.alert('Thanks, your complain is add '); </script>";
                        echo"<script>location.replace('complain.php');  </script>";
            }
        else
          {
            echo"<script>window.alert('Please , write in simple text'); </script>";
            echo"<script>location.replace('complain.php');  </script>";
          }
?>