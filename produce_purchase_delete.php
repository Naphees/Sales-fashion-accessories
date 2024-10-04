<?php
	include('connection.php');
     $id=htmlspecialchars($_REQUEST['id']);
     echo $id;
     
     
     
                    $sql="DELETE FROM sell WHERE id='".$id."'   ";
            
        
   
    if($conn->query($sql)==TRUE)
        {
           echo"<script> alert('successfully delete produce');</script>  ";
            echo"<script>location.replace('final_bill.php');</script>   ";
            
           
        }  
        else
          {
               echo"<script> alert('Fail to delete produce');</script>  ";
            echo"<script>location.replace('final_bill.php');</script>   ";
            
            
          }
     
?>

                   