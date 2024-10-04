<?php
        require('connection.php');
        $sql="SELECT * FROM `customer` WHERE `id`='".$_SESSION['id']."' ";
        $result=$conn->query($sql);
        if($result->num_rows >0)
                {
                       $row=$result->fetch_assoc();
                      
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <?php   require('design.php'); ?>
    <title>Account</title>
</head>
<body style="margin-top:2%">
            <div class="container-fluid">
               
                                    <?php
                                            require('link.php');
                                    ?>
                        
                             
                                <hr>
                       
                                
                                         <div class="row">         
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-4">
                                                        <div class="row jumbotron">
                                               <div class="col-sm-12" style="text-align:center;"> <h3 style="text-align:center;">Account Details<br><br></h3></div>
                                               <div class="col-sm-4"></div>
                                               <div class="col-sm-12 " style="text-align:center;"><p class="text-center"><img src=" <?php echo $row['image']; ?>" class="rounded-circle d-block img-fluid" align="center"width="800px"></p> </div>
                                              <div class="col-sm-4"></div>
                                              <div class="col-sm-12" style="text-align:center;"> <br><b><i>Name : <?php echo $row['name']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;">  <b><i>Mobile : <?php echo $row['mobile']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>Business : <?php echo $row['business']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;">  <b><i>Village : <?php echo $row['village']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;">  <b><i>Town : <?php echo $row['town']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>District : <?php echo $row['district']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>state : <?php echo $row['state']; ?></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;">  <b><i>Country : <?php echo $row['country']; ?></i></b></div>
                                              
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>Pincode : <?php echo $row['pincode']; ?><br><br></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>Email : <?php echo $row['email']; ?><br><br></i></b></div>
                                              <div class="col-sm-12" style="text-align:center;"> <b><i>Webside : <?php echo $row['webside']; ?><br><br></i></b></div>
                                            </div>
                                             </div>
                                             <div class="col-sm-4"></div>
                                         </div> 
                                    
            </div>
</body>
</html>