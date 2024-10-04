<?php 
   require('security.php');
   $sql="SELECT * FROM `customer` WHERE `join` IS NULL  "; 
   $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>

    <title>all purchaser request</title>
</head>
<body>
    <div class="conatainer-fluid">
        
                    <?php require('left1.php'); ?>
               
                    <?php  require('search1.php'); ?>
                    <hr>
                  <table class="table table-striped table-hover">
                            <tr>
                                <th colspan="7"><h3 style="text-align:center;"><b><i>All Purchaser Request</i></b></h3></th>
                            </tr>
                            <tr>
                                <th><b><i>S.N.</i></b></th>
                                <th><b><i>Purchaser</i></b></th>
                                <th><b><i>Firm address</i></b></th>
                                <th><b><i>Business</i></b></th>
                                <th><b><i>Mobile</i></b></th>
                                <th><b><i>Join</i></b></th>
                                <th><b><i>More information</i></b></th>
                            </tr>
                            <?php
                                if($result->num_rows >0)
                                    {
                                        $a=0;
                                       while($row=$result->fetch_assoc())
                                        {
                                       
                            ?>
                                    <tr>
                                        <td><b><i><?php $a=$a+1; echo $a;  ?></i></b></td>
                                        <td><b><i><?php echo $row['name'];  ?></i></b></td>
                                        <td><b><i><?php echo $row['village']."".$row['town']."".$row['district']."".$row['state'];  ?></i></b></td>
                                        <td><b><i><?php echo $row['business'];  ?></i></b></td>
                                        <td><b><i><?php echo $row['mobile'];  ?></i></b></td>
                                        <td><b><i><a href="purchaser_request_access.php?id=<?php echo $row['id'];  ?>">     <?php echo"Join";?> </a>  </i></b></td>
                                        <td><b><i><a href="purchaser_detail.php?id=<?php echo $row['id'];  ?>"> more information</a></i></b></td>
                                    </tr>

                            <?php
                                                 
                                        } 
                                    }
                            ?>
                     </table> 
                     <br><hr><br>
               
    </div>
</body>
</html>