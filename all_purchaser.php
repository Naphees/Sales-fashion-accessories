
<?php 
   require('security.php');
   $sql="SELECT * FROM `customer` WHERE `join` IS NOT NULL "; 
   $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>

    <title>all purchaser</title>
</head>
<body>
   <div class="cotainer-fluid">
           
                
                    <?php require('left1.php'); ?>
               
                    <?php  require('search1.php'); ?>
                    <hr>
                
                            
                                        <button class="btn btn-lg btn-danger" onclick="document.location='add_purchaser.php'" >
                                            <b><i>Add purchaser</i></b>
                                        </button>
                                        <button class="btn btn-lg btn-success"  onclick="document.location='purchaser_request.php'">purchaser request</button>
                                        <br><br>
                           
                    
                     <table class="table table-striped table-hover">
                            <tr>
                                <th colspan="7"><h3 style="text-align:center;"><b><i>All Purchaser</i></b></h3></th>
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
                                        <td><b><i><?php echo $row['join']; ?></i></b></td>
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