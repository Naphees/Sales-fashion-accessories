<?php
        require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <?php   require('design.php'); ?>

   
    <title>Advice</title>
</head>
<body style="margin-top:2%">
            <div class="container-fluid">
                
                                    <?php
                                            require('link.php');
                                    ?>
                      
                              
                                    <hr>
                            <form action="advice_access.php" method="post"> 
                                <div class="row">
                                    <div class="col-sm-12">
                                          <h1 style="text-align:center;"><b><i>Advice </i></b></h1>      
                                    </div>
                                    <div class="col col-12"><br></div>
                                    <div class="col-sm-6" style="text-align:right;">
                                        <label for="advice"><b><i>Enter Topic to advice</i></b></label>
                                    </div>
                                    <div class="col-sm-6">
                                    <textarea name="advice" id="advice" cols="30" rows="3" class="form-control" placeholder="write here your topic to advice" maxlength="300" required></textarea>
                                    </div>
                                    <div class="col col-12"><br></div>
                                    <div class="col col-12"><br></div>
                                    <div class="col-sm-6" style="text-align:right;">
                                        <label for="mobile"><b><i> Active Mobile Number</i></b></label>
                                    </div>
                                    <div class="col-sm-6">
                                                <input type="number" name="mobile" id="mobile"  placeholder="enter active mobile number to contact" required class="form-control" maxlength="12">
                                    </div>
                                    <div class="col col-12"><br></div>
                                    <div class="col col-12"><br></div>
                                    
                                    <div class="col-sm-12">
                                          <p class="text-center">      <button type="submit" name="submit" value="submit" class=" btn btn-lg btn-success"><b><i> Submit</i></b></button>
                                   
                                                <button type="reset" name="reset" value="reset" class=" btn btn-lg btn-danger"><b><i> Reset</i></b></button>
                                            </p>
                                    </div>
                                    
                                    
                                </div>
                             </form> 

            </div>
</body>
</html>