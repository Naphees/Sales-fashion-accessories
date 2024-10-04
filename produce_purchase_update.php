<?php
	include('connection.php');
    $id=htmlspecialchars($_REQUEST['id']);
   
     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <?php require('design.php');?>
            
    </head>
<body  style="margin-top:2%">
    <div class="container-fluid" >
       
        <?php include('link.php');
         
        ?>    
           
      
        <hr>
        
        
              <div class="row">
                 
               <?php
                   $sql ="SELECT * FROM `sell` WHERE `id`='".$id."' ";
    
      $result=$conn->query($sql);
                    if($result->num_rows >0)
                    {
                        $row=$result->fetch_assoc();
                        
                            $sql1="SELECT * FROM `produce` WHERE `id`='".$row['produce_id']."' "; 
                            $result1=$conn->query($sql1);
                            if($result1->num_rows >0)
                               {
                                   $row1=$result1->fetch_assoc();

                               }
                    }       
                          
                    
                    ?>
                    <div class="col-sm-4"></div>
                     <div class="col-sm-4 jumbotron">
                        <form action="produce_purchase_update_access.php" method="post">
                        
                        
                                            <h3><b><i>Produce quantity update</i></b></h3>
                            
                                        <br><br>
                                      <label for="quantity"><p class="  <p class="text-lg-right"> Quantity in <?php  echo $row1['sell']; ?> : </p> </label>
                               
                                    
				                        <select name="quantity" id="quantity"class="form-control" >
				                    	<?php  for($a=1;$a<=100;$a++)
					                	{   ?>	

						                <option> <?php echo $a*$row1['minimam_sell']; ?>           </option>
					                     <?php	}  ?>
					                    </select>
					                    
					                      
                        <br><br><Br> <button type="submit" name="submit" value="submit"class="btn btn-success">Add </button>
                            
                            <button type="reset" name="reset" value="reset"class="btn btn-danger">Reset</button>     
                                                    
                                                   
					                    
					                    
					                    <input type="hidden" name="id" value="<?php echo $row['id'];?>" required>
					                    <input type="hidden" name="produce_id" value="<?php echo $row1['id'];?>" required>
					                    <input type="hidden" name="rate" value="<?php echo $row1['rate'];?>" required>
					                   <input type="hidden" name="profit" value="<?php echo $row1['profit'];?>" required>
					                    <input type="hidden" name="spend" value="<?php echo $row1['spend'];?>" required>
					                    <input type="hidden" name="seller_rate" value="<?php echo $row1['seller_rate'];?>" required>
					                   
                        
                      
                            
                           
                        </form>    
                    </div>
                     <div class="col-sm-4"></div>
                    
                    
                    
                   

                 
                                   
                                   
             </div>
                    
       
    </div>
      
    
</body>
</html> 



