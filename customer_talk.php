<?php    require('security.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>
   
    <title>customer talk</title>
</head>
<body>
   <div class="cotainer-fluid">
            <div class="row">
                <div class="col col-12">
                    <?php require('left1.php'); ?>
                </div>
                <div class="col col-12">
                    <?php  require('search1.php'); ?>
                    <hr>
                </div>
                
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col col-12">
                             <h1 style="text-align:center;"><b><i>All Customer Talk</i></b></h1>  
                        </div>
                        <div class="col col-12">
                            <hr>
                        </div>
                        <div class="col col-12"><br><br></div>
                        <div class="col-sm-12">
                          <p class="text-center">
                            <button class="btn btn-lg btn-success " onclick="document.location='complain1.php' "><b><i> All Complain</i></b></button>
                            <br><br>
                      
                            <button class="btn btn-lg btn-danger " onclick="document.location='suggestion1.php' "><b><i>All Suggestion</i></b></button>
                            <br><br>
                        
                            <button class="btn btn-lg btn-primary " onclick="document.location='advice1.php' "><b><i>ALL Advice</i></b></button>
                            <br><br>
                        
                            <button class="btn btn-lg btn-warning" onclick="document.location='feedback1.php' "><b><i>All Feedback</i></b></button>
                            <br><br>
                         </p>
                        </div>
                        <div class="col col-12">
                                <br><br>
                        </div>
                    </div>
                
                </div>
            </div>
   </div> 
</body>
</html>