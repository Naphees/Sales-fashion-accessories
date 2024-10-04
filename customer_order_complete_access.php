<?php
	include('security.php');
	$varify=htmlspecialchars($_POST['varify']);

	$sql="SELECT * FROM produce_order WHERE id=".$varify."";
	$result=$conn->query($sql);
	   if($result->num_rows >0)
	        {
	            $row=$result->fetch_assoc();
	          
	            $otp=rand(100000,999999);
	          
	            $sub="order varifcation";
	            $mess="Otp is : ".$otp." \n\n\n\n\n\n\n\n do not share otp to other";
	            
	          if(mail($row['varify_email'],$sub,$mess)==TRUE)
	                {
	                   
	                }
	        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  require('design.php');  ?>
    </head>
    <body style="margin-top:2%">
	<div class="container-fluid">
	  
                    <?php  include('left1.php'); ?>

                    <hr>
                     <div class="row" style="margin-top:8%">
                         <div class="col-sm-4"></div>
                         <div class="col-sm-4 jumbotron">
                             <form action="otp_varify.php" method="post">
                                 <h3><i>OTP varification </i></h3>
                                   <h6><i><?php echo"OTP sent to ".$row['varify_email'];?></i></h6>
                                 <br><hr>
                                 <b><i>enter 6 Digits OTP : </i></b>
                                 <input type="password" name="varify1" value="" required class="form-control" maxlength="6" minlength="6">
                                 <input type="hidden" name="varify" value="<?php echo $otp; ?>" required>
                                 <input type="hidden" name="id" value="<?php echo $varify; ?>"required>
                                 <br>
                                 <button type="submit" value="sumbit" name="submit" class="btn btn-lg btn-success"><b><i>Varify</i></b></button>
                                 <button type="reset" value="reset" name="reset" class="btn btn-lg btn-danger"><b><i>Reset</i></b></button>
                             </form>
                            
                             
                             
                         </div>
                         <div class="col-sm-4"></div>
                     </div>
	
        </div>
    </body>
</html>