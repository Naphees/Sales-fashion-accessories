<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?php require('design.php');  ?>
  </head>
<body style="margin-top:2%">
    <div class="container-fluid" >
       
              <?php  include('link.php'); ?>

                         
                    <hr>
                <div class="row" >
                       <div class=" col">
                              <h1 style="text-align:center;"> Order Details</h1>
                       </div>
                        <div class="col col-12">
                                        <br>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 ">
                          
                             <br>
                                 <button type="button" name="button1" value="button1" class="btn btn-lg btn-success form-control" onclick="document.location='order_current.php' ">
                                      <b><i>Current Order</i></b>
						                   
                                 </button>
                                
                            
                          
			                  </div>
                       
			 
                      
			
                        <div class="col-sm-4">
				                 
                                <br>
                                <button  type="button" name="button" value="button" class=" btn-lg btn btn-danger form-control" onclick="document.location='order_complete.php' ">
                                      <b><i>complete Order</i></b>
                                       
                                </button>
                               
                               
                      </div>
                       <div class="col-sm-2"></div>
                      
			 
		
              </div>
         
    </div>
    
</body>
</html>