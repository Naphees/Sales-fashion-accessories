<?php
    require('connection.php');
    $advice=htmlspecialchars($_POST['advice']);
     echo $advice;
     $mobile=htmlspecialchars($_POST['mobile']);
      echo $mobile;
      $time=date("h:i:s") or die('time errors');
      $date=date("d-m-y") or die('date errors');
      $sql="INSERT INTO advice(customer_id , advice , mobile , time, date , customer ) VALUES('".$_SESSION['id']."', '".$advice."', '".$mobile."', '".$time."', '".$date."' ,'".$_SESSION['name']."' )";
        if($conn->query($sql)==TRUE)
            {
                        echo"<script>window.alert('Thanks, your topic record , we contact hurry up'); </script>";
                        echo"<script>location.replace('advice.php');  </script>";
            }
        else
            {
              echo"<script>window.alert('Please , write in simple text'); </script>";
              echo"<script>location.replace('advice.php');  </script>";
            }
?>  