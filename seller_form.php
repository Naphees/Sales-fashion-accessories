
<?php
    require('connection.php');
?>
<!doctype html>
  <html lang="en">
    <head>
        <?php require('design.php'); ?>
    </head>
    
    <body style="margin-top:2%">
         <div class="container-fluid">
        
         <?php include('link.php')  ?>
         
          <hr>
        <form action="seller_form_access.php" method="post" >
     
            <div class="row">
                  
                            <div class="col col-12" align="center">
                                
					                <h2> <b><i> CREATE SHOP</i></b>     </h2>
					            <br>
                                 
				                 <input type="hidden"  name="id_number" value="<?php echo $_SESSION['id'];   ?>"  required >


                            </div>
                             <div class="col col-4 " align="right">
                               <label for="firm"> <b><i>Firm name : </i></b> </label><br>
                            </div>
                            <div class="col col-8 ">
                                <input type="text" id="firm" name="firm" required  placeholder="enter firm name" maxlength="50" minlength="1" class="form-control">
                                <br>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="col col-4 " align="right">
                               <label for="firm_adress"> <b><i>Firm Address : </i></b> </label><br>
                            </div>
                            <div class="col col-8 ">
                                <input type="text" id="firm_adress" name="firm_adress" required  placeholder="enter firm address" maxlength="" minlength="1" class="form-control">
                                <br>
                            </div>
                            <div class="col col-4" align="right">
                                <label for="account_number"> <b><i>Account Number : </i></b></label><br>
                            </div>
                            <div class="col col-8">
                                    <input type="number" name="account" id="account_number" required placeholder="enter account number" maxlength="20" minlength="10" class="form-control">
                                    <br>
                            </div> 
			     <div class="col col-4" align="right">
                                <label for="ifsc_code"> <b><i>IFSC CODE : </i></b></label><br>
                            </div>
                            <div class="col col-8">
                                    <input type="text" name="ifsc_code" id="ifsc_code" required placeholder="enter ifsc code" maxlength="20" minlength="5" class="form-control">
                                    <br>
                            </div>
			    <div class="col col-4" align="right">
                                <label for="gstin"> <b><i>GSTIN Number : </i></b></label><br>
                            </div>
                            <div class="col col-8">
                                    <input type="text" name="gstin" id="gstin" placeholder="GSTIN Number is optional"  class="form-control">
                                    <br>
                            </div>

			     
                             <div class="col col-4" align="right">
                                <label for="produce_sell"> <b><i>Produce Sell : </i></b></label><br>
                            </div>
                            <div class="col col-8">
                                    <input type="text" name="produce_sell" id="produce_sell" required placeholder=" enter your produce" class="form-control">
						
                                    <br>
                            </div> 
                            
                            
                            <div class="col col-4" align="right">
                                <label for="mobile"> <b><i>Mobile : </i></b></label><br>
                            </div>
                            <div class="col col-8">
                                    <input type="tel" name="mobile" id="mobile" required placeholder="enter your mobile number" maxlength="12" minlength="3" class="form-control">
                                    <br>
                            </div>
			   
                            
                            <div class="col col-4" align="right">
                                <label for="email" ><b><i>Email :</i></b></label>
                            </div>
                            <div class="col col-8">
                                <input type="email" name="email" placeholder="enter email adress" id="email"  minlength="1" required class="form-control">
                                <br>
                            </div>
                            <div class="col col-4" align="right">
                                <label for="webside" ><b><i>webside :</i></b></label>
                            </div>
                            <div class="col col-8">
                                <input type="text" name="webside" placeholder=" webside name is optional" id="webside"  class="form-control">
                                <br>
                            </div>
                            
                            
                            <div class="col col-12">
                                
                                         <p class="text-center">
                                            <button type="submit" value="submit" name="submit" class=" btn btn-lg btn-primary">
                                                        Submit
                                            </button>
                                          
                                   
                                           
                                            <button type="reset" value="reset" name="reset" class=" btn btn-lg btn-danger">
                                                    reset
                                            </button>
                                         </p>    
                                   
                            </div>
                           
                               
            </div>
         </form> 
      </div>         
      
    </body>
</html>