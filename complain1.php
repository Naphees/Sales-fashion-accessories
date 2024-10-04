<?php
    require('security.php');
    $sql="SELECT * FROM `complain`";
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>

    <title>all Complain</title>
</head>
<body>
   <div class="cotainer-fluid">
            <div class="row">
                <div class="col col-12">
                    <?php require('left1.php'); ?>
                </div>
                <div class="col-sm-12">
                    <?php  require('search1.php'); ?>
                    <hr>
                </div>
               
                <div class="col-sm-12">
                     <table class="table table-striped table-hover">
                     <tr> <th colspan="9"><b><i><h3 style="text-align:center;">All Customer Complain </h3></i></b></th></tr>
                        <tr>
                          <th><b><i>S.N.</i></b></th> 
                          <th><b><i>Customer</i></b></th> 
                          <th><b><i>Mobile</i></b></th> 
                          <th><b><i>Complain</i></b></th> 
                          <th><b><i>Complain Action</i></b></th> 
                          <th><b><i>Complete</i></b></th> 
                          <th><b><i>Block</i></b></th> 
                          <th><b><i>Time</i></b></th> 
                          <th><b><i>Date</i></b></th> 
                        </tr>
                        <?php
                            if($result->num_rows >0)
                              
                                    {
                                        $a=0;
                                        while($row=$result->fetch_assoc())
                                        {

                                     
                        ?>
                            <tr>
                                <td><b><i><?php $a=$a+1; echo  $a; ?></i></b></td>
                                <td><b><i><?php  echo  $row['customer']; ?></i></b></td>
                                <td><b><i><?php  echo  $row['mobile']; ?></i></b></td>
                                <td><b><i><?php  echo  $row['complain']; ?></i></b></td>
                                <td><b><i><?php  echo  $row['complain_action']; ?></i></b></td>
                                <td><b><i>Complete</i></b></td>
                                <td><b><i>Block</i></b></td>
                                <td><b><i><?php  echo  $row['time']; ?></i></b></td>
                                <td><b><i><?php  echo  $row['date']; ?></i></b></td>
                            </tr>
                        <?php
                                       }
                                    }
                        ?>
                     </table> 
                     <br><hr><br>
                
                </div>
            </div>
   </div> 
</body>
</html>