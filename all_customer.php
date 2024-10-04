<?php    require('security.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>
    
    <title>all customer</title>
</head>
<body>
   <div class="cotainer-fluid">
            
                    <?php require('left1.php'); ?>
               
                    <?php  require('search1.php'); ?>
                    <hr>
                
                  
                    <div class="row">
                        <div class="col-sm-12">
                             <h1 style="text-align:center;"><b><i>ALL Customer</i></b></h1>
                                  <hr>  
                        </div>
                        <div class="col-sm-12">

                          <p class="text-center">
                                        
                                        <button type="button" name="button1" value="button1" class="btn btn-lg btn-success" onclick="document.location='all_seller.php' ">
                                            <h2 ><b><i>All Seller</i></b></h2>
						         
                                         </button>
                        
                                        
                           
                        </div>
                        <div class="col-sm-12">

                                <p class="text-center">
                                         <button type="button" name="button1" value="button1" class="btn btn-lg btn-danger" onclick="document.location='all_purchaser.php' ">
                                                <h2 ><b><i>All Purchaser</i></b></h2>
    
                                         </button>
                                </p>  
                        </div>  
                
   </div> 
</body>
</html>