<?php 
  session_start();
  if(isset($_SESSION['id2']))
    {
      
    }
    else
      {
          echo"<script>alert('your password or username is wrong '); </script>";
        echo"<script>location.replace('photo_main.php');</script>";
      }
       $server="localhost";
      $user="impprfrh_husen";
      $password="Husen_9997_bca";
      $db="impprfrh_i.m.p.db";
      $conn= new mysqli($server,$user,$password,$db)or die('connection erorrs');
      if($conn->connect_error)
        {
          die("connection fail".$conn->connect_error);
        }
       else
        {
          
        }
    
       
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <?php  require('design.php'); ?>
        <title>
            dash
        </title>
    </head>
    <body style="margin-top:8%">
        <div class="container-fluid">
           <div class="row">
               <div class="col-sm-4">
                   
               </div>
                              <div class="col-sm-4 jumbotron">
                                   <button class="btn btn-warning btn-lg" onclick="location.replace('photo_exit.php');">Exit</button>
                                   <br>
                                  <form action="photo_upload_access.php" method="post" enctype="multipart/form-data">
                                     
                                        <h1><b><i>Photo Uploads</i></b></h1>
                                        <br>
                                        <b><i>produce photo : </i></b>
                                        <input type="file" name="image" required class="form-control">
                                        <br><br><br>
                                        <button type="submit" value="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
                                         <button type="reset" value="reset" name="reset" class="btn btn-lg btn-danger">Reset</button>
                                         <br>
                                         </form>
                              </div>
                              <div class="col-sm-4">
                   
               </div>
           </div>
                   
                       
                   
              
                
        </div>
    </body>

</html>