<?php
	include('security.php');
	
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
                             <form action="customer_order_complete_access.php" method="post">
                                 <h3><i>Customer order varification</i></h3>
                                 <br><hr>
                                 <b><i>Order number : </i></b>
                                 <input type="number" name="varify" value="" required class="form-control">
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