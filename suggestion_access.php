<?php
    require('connection.php');
    $suggestion=htmlspecialchars($_POST['suggestion']);
    echo $suggestion;
    $time=date("h:i:s") or die('time errors');
    $date=date("d-m-y") or die('date errors');
    $sql="INSERT INTO `suggestion`(`customer_id` , `suggestion` , `time` ,`date` , `customer`) VALUES('".$_SESSION['id']."' , '".$suggestion."' , '".$time."' , '".$date."' , '".$_SESSION['name']."' )    ";
    if($conn->query($sql)===TRUE)
        {
            echo"<script>window.alert('Thanks , for suggestion  '); </script>";
            echo"<script>location.replace('suggestion.php');  </script>";
        }
    else
        {
            echo"<script>window.alert('Please , write in simple text  '); </script>";
            echo"<script>location.replace('suggestion.php');  </script>";
        }
    
?>