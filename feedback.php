<?php
        require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <?php   require('design.php'); ?>

   
    <title>Feedback</title>
</head>
<body style="margin-top:2%">
            <div class="container-fluid">
               
                                    <?php
                                            require('link.php');
                                    ?>
                       
                               
                       
                                <hr>
                       
                        <form action="feedback_access.php" method="post"> 
                                <div class="row">
                                    <div class="col col-12">
                                          <h1 style="text-align:center;"><b><i>Feedback </i></b></h1>      
                                    </div>
                                    <div class="col col-12"><br></div>
                                    <div class="col-sm-6" style="text-align:right;">
                                        <label for="feedback"><b><i>Enter your feedback</i></b></label>
                                    </div>
                                    <div class="col-sm-6">
                                           
                                                <textarea name="feedback" id="feedback" cols="30" rows="3" class="form-control" placeholder="write here your feedback" maxlength="300" required></textarea>
                                    
                                    
                                    </div>
                                    <div class="col col-12"><br></div>
                                    <div class="col col-12"><br></div>
                                    
                                   
                                    <div class="col-sm-12">
                                               <p class="text-center">
                                                <button type="submit" name="submit" value="submit" class="btn btn-lg btn-success"><b><i> Submit</i></b></button>
                                   
                                                <button type="reset" name="reset" value="reset" class="btn btn-lg btn-danger"><b><i> Reset</i></b></button>
                                                </p>
                                    </div>
                                    
                                    
                                </div>
                           </form>
                        
            </div>
</body>
</html>