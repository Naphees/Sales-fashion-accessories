<?php
    require('connection.php');
    $feedback=htmlspecialchars($_POST['feedback']);
    echo $feedback;
    $time=date("h:i:s") or die('time errors');
    $date=date("d-m-y") or die('date errors');
    $sql="INSERT INTO `feedback`(`customer_id` , `feedback` , `time` ,`date` , `customer`) VALUES('".$_SESSION['id']."' , '".$feedback."' , '".$time."' , '".$date."' , '".$_SESSION['name']."' )    ";
    if($conn->query($sql)===TRUE)
        {
            echo"<script>window.alert('Thanks , for feedback  '); </script>";
            echo"<script>location.replace('feedback.php');  </script>";
        }
    else
        {
            echo"<script>window.alert('Please , write in simple text '); </script>";
            echo"<script>location.replace('feedback.php');  </script>";
        }
    
?>