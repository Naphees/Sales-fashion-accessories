
<?php
	include('connection.php');
     $id=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
            require('design.php');
    ?>
    
    <title>order delivery</title>
</head>
<body style="margin-top:2%">
     <div class="container-fluid">
               
                        <?php require('link.php'); ?>
                   

                  <hr>
                 

   
 
        <form action="order_delivery_access.php" method="post">
           
                        <div class="row">
                            <div class="col col-12">
                                            <h2 align="center"> <b><i>Fill Delivery Address</i></b></h2>
                            </div>
                        
                            
                    
                            
                                <input type="hidden" id="customer" value="<?php echo $_SESSION['id']; ?>" name="customer_id" class="form-control" readonly  require>
                    
                                <input type="hidden" id="amount" value="<?php echo $id; ?>" name="amount" class="form-control" readonly require >
                        
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="mobile"><b><i>Mobile :</i></b> </label>
                            </div>
                            <div class="col col-9">
                                <input type="number" id="mobile" name="mobile"  placeholder="enter mobile number" class="form-control" maxlength="12" minlength="10" required>
                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="village"><b><i>Village :</i></b></label>
                            </div>
                            <div class="col col-9">
                                <input type="text" name="village"  id="village" placeholder="enter your village name" class="form-control" maxlength="30" minlength="1" required >

                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="town"><b><i>Town :</i></b></label>
                            </div>
                            <div class="col col-9">
                                <input type="text" name="town"  id="town" placeholder="enter your town name" class="form-control" maxlength="30" minlength="1" required >
                                
                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="district"><b><i>District :</i></b></label>
                            </div>
                            <div class="col col-9">
                                <input type="text" name="district"  id="district" placeholder="enter your district name" class="form-control" maxlength="30" minlength="1" required >
                                
                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="state"><b><i>State :</i></b></label>
                            </div>
                            <div class="col col-9">
                                <input type="text" name="state"  id="state" placeholder="enter your state name" class="form-control" maxlength="30" minlength="1" required >
                                
                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="country"><b><i>Country :</i></b></label>
                            </div>
                            <div class="col col-9" >
                            <select name="country" id="country" class="form-control">
                                <option value="India" selected>India</option>
                                <option value="nepal">Nepal</option>
                                <option value="china">china
                                <option value="pakistan">pakistan</option>
                                <option value="bangladesh">bangladesh</option>
                                </option>
                            </select>
                            </div>
                            
                            <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="pincode"><b><i>Pincode : </i></b></label>
                            </div> 
                            <div class="col col-9"> 
                                <input type="number" value="" name="pincode" id="pincode" placeholder="enter your pincode" class="form-control" malgength="20" minlength="1" required>
                            </div>
                            <div class="col col-12"><br></div>
                            
                            
                            
                             <div class="col col-12"><br></div>
                            <div class="col col-3" align="right">
                                <label for="varify"><b><i>order varify email : </i></b></label>
                            </div> 
                            <div class="col col-9"> 
                                <input type="email" value="" name="varify_email" id="varify" placeholder="enter your pincode" class="form-control" malgength="20" minlength="1" required>
                            </div>
                             <div class="col col-12"><br></div>
                            
                            
                           
                            <div class="col">
                               <p class="text-center"> <button type="submit" value="submit" name="submit" class="btn-lg btn  btn-danger">
                                        <b><i>Submit</i></b>
                                </button>
                           
                           
                                <button type="reset" value="reset" name="reset" class=" btn-lg btn  btn-primary">
                                    <b><i>Reset</i></b>
                                </button></p>
                            </div>
                            <div class="col col-12"><br></div>
                        </div>

                   
                
           </div>
       </form> 
    </body>
</html>