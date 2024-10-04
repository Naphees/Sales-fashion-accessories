 <?php
    include('connection.php');
        class naphees 
            {
                public $id;
                public $sql;
                public $result;
                public $row;
            }
            $ob=new naphees();
                    $ob->id=$_REQUEST['id'];
           
                    $ob->sql="SELECT * FROM produce WHERE id='".$ob->id."'  " ;
                   $ob->result=$conn->query($ob->sql);
                        if($ob->result->num_rows>0)
                          {
                                $ob->row=$ob->result->fetch_assoc();
                          }
                        else
                            {
                                echo"false";
                            }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require('design.php'); ?>
   
    <title>produce purchase</title>
</head>
<body style="margin-top:2%">
    
         <?php require('link.php');
            
         ?>
        <hr> 
        <form action="produce_purchase_access.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
             
                   <div class="row">
                     <div class="col-sm-2"></div>  
                      <div class="col-sm-8">
                    
                            <img src="<?php echo $ob->row['image'];?>" alt="not avialable" width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
                                <br><br>
                             <div class="row">
                                <div class="col-sm-3">
                            
                                        
                                      <label for="quantity"><p class="  <p class="text-lg-right"> Quantity in <?php  echo $ob->row['sell']; ?>:</p> </label>
                                </div> 
                                <div class="col-sm-6">
                                    
				                        <select name="quantity" id="quantity"class="form-control" >
				                    	<?php  for($a=1;$a<=100;$a++)
					                	{   ?>	

						                <option> <?php echo $a*$ob->row['minimam_sell']; ?>           </option>
					                     <?php	}  ?>
					                    </select>
					               
					           </div> 
					        </div>
					           
                                         <input type="hidden" value="<?php echo $ob->row['sell']; ?>" name="sell"  required >
                                         <br>
                                  <p class="text-center">
                                        <button type="submit" value="submit" name="submit" class=" btn btn-success btn-lg">
                                            <b><i>Purchase</i></b>
                                        </button>
                                 </p>
                                        <br>
                                   
                                        <input type="hidden" value="<?php echo $ob->row['id'];?>" name="produce_id" >
                                  
                                        <input type="hidden" value="<?php echo $ob->row['produce'];?>" name="produce">

                                   
                                    
                                        <input type="hidden" value="<?php echo $ob->row['rate'];?>" name="rate">
					                    <input type="hidden" value="<?php echo $ob->row['seller_id']; ?> " name="seller_id">
                                       
                                      
                                       <input type="hidden" value="<?php echo $ob->row['profit']; ?> " name="profit"> 
                                        <input type="hidden" value="<?php echo $ob->row['spend']; ?> " name="spend"> 
                                      
					                    <input type="hidden" value="<?php echo $ob->row['image'];?> " name="produce_image">                                  
                                        <input type="hidden" value="<?php echo $_SESSION['id'];?> " name="customer_id" >
                                        <input type="hidden" value="<?php echo $_SERVER['PHP_SELF']; ?>" name="page" >
                                        <input type="hidden" value="<?php echo $ob->row['seller_rate'];  ?>" name="seller_rate">
 
                                       
                                   
                                   <h2> <b><i>Details -</i></b></h2>
                                    
                                    <b><i>Produce : <?php echo $ob->row['produce'];?></i></b>
                                    <br>
                                    <b><i>Produce code: <?php echo $ob->row['id'];?></i></b>
                                    <br>
                                    <b><i>Quantity : <?php echo $ob->row['quantity']." ".$ob->row['sell'];?></i></b>
                                    <br>
                                    <b><i>price : <?php echo $ob->row['rate'];?></i></b>
        
                                    <br><br>
                    </div>  
                     <div class="col-sm-2"></div>  
            </div>    
             
        </div>
                          
    </form>
</body>
</html>
   