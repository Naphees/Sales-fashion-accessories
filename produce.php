 <?php
include('security.php');
?>
   <?php
        class produce
            {
               
                public $sql;
                public $row;
                public $result;        
                    
            }
            $ob=new produce();
             
                                                       $id=htmlspecialchars($_POST['id']);
                                                       
                                                       $id=(int)$id;
                                                         $id1=htmlspecialchars($_POST['id1']);
                                                       
                                                       $id1=(int)$id1;
           
           if($id==$id1)
           {
               
         
            if($id==0)   
            {
               $ob->sql= "SELECT * FROM `produce`  ORDER BY `id` DESC LIMIT 5";  
            }

            else
            {
                 $ob->sql= "SELECT * FROM `produce` WHERE `id`='".$id."' ";  
            }
           } 
          else if($id>$id1)
          {
              
            
               $ob->sql= "SELECT * FROM `produce` WHERE `id`='".$id."'  ";  
          }
          else
            {
                      $ob->sql= "SELECT * FROM `produce` WHERE `id`>='".$id."' OR `id`<='".$id1."' ";  
            }
            
            
            
             $ob->result=$conn->query($ob->sql);
?>    
<!DOCTYPE html>
<html lang="en">
    <head>
                <?php require('design.php'); ?>
    </head>
     <body style="margin-top:2%">
         <div class="container-fluid">
               
                        <?php  include('left1.php');  ?>
                        
                        <hr>
                         <table class="table table-hover table-responsive table-striped">
                             <tr>
                                 
                            
                            <td>                                            
                    
                        <button type="button" class="btn btn-lg btn-warning" onclick="document.location='produce_add.php' ">
                                    <b><i>Add Produce</i></b>
                        </button>
                        </td>
                        <td>
                        <button type="button" class="btn btn-lg btn-danger" onclick="document.location='produce_requirement.php' ">
                                    <b><i> Produce Requirement</i></b>
                        </button>
                        
                        
                         
                              </td>
                              
                               <td>                                            
                    
                        <button type="button" class="btn btn-lg btn-warning" onclick="document.location='produce_quantity_available.php' ">
                                    <b><i> Produce  quantity available</i></b>
                        </button>
                        </td>
                        
                        
                        
                          <td>                                            
                    
                        <button type="button" class="btn btn-lg btn-success" onclick="document.getElementById('form').style='display:block'" >
                                    <b><i> Produce filter</i></b>
                        </button>
                                             <form action="" method="post" style="display:none;" id="form">
                                                           Starting produce id : <input type="number" name="id" value="0" required class="form-control">
                                                          Last produce id  : <input type="number" name="id1" value="0"   class="form-control">
                                                          <br>
                                                                <button type="submit" name="submit" value="submit" class="btn btn-sm btn-success">apply</button>
                                                                  <button type="reset" name="reset" value="reset" class="btn btn-sm btn-danger">reset</button>
                                                </form>
                                                   
                        
                        </td>
                        
                        
                              
                         </tr>
                        </table>    
                        <br><br>
                              
                         <h2 align="center" class="alert-success"><b><i>  All Produce</i></b></h2>
                        <table class="table table-hover  table-striped">
                      
                            
                            <tr align="center">
                                <th>
                                    <b><i>S.N.</i></b>
                                </th>  
                                <th>
                                    <b><i>Produce</i></b>
                                </th>
                                 <th>
                                
                                    <b><i>Quantity available </i></b>
                                </th>
                                <th>
                                    <b><i>Produce Code</i></b>
                                </th>
                                <th>
                                    <b><i>Quantity</i></b>
                                </th>
                                <th>
                                    <b><i>Rate</i></b>
                                </th>
				<th>
                                    <b><i>Width</i></b>
                                </th>
				<th>
                                    <b><i>Height</i></b>
                                </th>
				<th>
                                    <b><i>Weight</i></b>
                                </th>
				
                                <th>
                                
                                    <b><i>Minimam sell </i></b>
                                </th>
                                
                                
                                
                                
                                 <th>
                                
                                    <b><i>Categories </i></b>
                                </th>
                                 <th>
                                
                                    <b><i>Profit </i></b>
                                </th>
                                 <th>
                                
                                    <b><i>Spend </i></b>
                                </th>
                                
                                 <th>
                                
                                    <b><i>Seller Id </i></b>
                                </th> 
                                
                                
                                 <th>
                                
                                    <b><i>Seller Rate </i></b>
                                </th> <th>
                                
                                    <b><i>Seller Quantity </i></b>
                                </th> <th>
                                
                                    <b><i>Minimam Purchase </i></b>
                                </th>
                                
                                
                                
                                
                                
                                
                                
                                
                                <th>
                                    <b><i>Update</i></b>
                                </th>
                                <th>
                                    <b><i>Delete</i></b>
                                </th>
				                <th>
				                    
                                    <b><i>Image</i></b>
                                </th>
                                
                            </tr>
                            <?php  
                                if($ob->result->num_rows>0)
                                  {
                                     $a=0;
                                     while($ob->row=$ob->result->fetch_assoc())
                                          {    
                            ?>
                        
                                    <tr align="center">
					
                                            <td>
                                                <?php 
                                                        
                                                        $a=$a+1;
                                                        echo $a;
                                                    
                                                        
                                                ?>
                                            </td> 
					
                                            <td>
                                                 <?php echo $ob->row['produce'] ;?>
                                            </td>
                                            
                                            
                                             <td>
                                                 <?php echo $ob->row['quantity_available'] ;?>  <?php echo $ob->row['sell']; ?>
                                            </td>
                                            
                                            
                                            <td>
                                                 <?php echo $ob->row['id']; ?> 
                                            </td>
					
                                            <td class="text-danger">

                                                 <?php echo $ob->row['quantity']; ?>
                                                 <?php echo $ob->row['sell']; ?>
                                            </td>
					
				
                                            <td>
                                                 <?php echo $ob->row['rate']; ?>
                                            </td>
						                    <td>
                                                 <?php echo $ob->row['width']; ?>
                                            </td>
						                     <td>
                                                 <?php echo $ob->row['height']; ?>
                                            </td>
						                     <td>
                                                 <?php echo $ob->row['weight']; ?>
                                            </td>
						
                                             <td>
                                                 <?php echo $ob->row['minimam_sell']; ?> <?php echo $ob->row['sell']; ?>
                                            </td>
                                            
                                            <td>
                                                 <?php echo $ob->row['categories'] ;?>
                                            </td>
                                            
                                            <td>
                                                 <?php echo $ob->row['profit'] ;?>
                                            </td>
                                            
                                            <td>
                                                 <?php echo $ob->row['spend'] ;?>
                                            </td>
                                            <td>
                                                <?php echo $ob->row['seller_id'];?>
                                            </td>
                                            <td>
                                                 <?php echo $ob->row['seller_rate'] ;?>
                                            </td>
                                            <td>
                                                 <?php echo $ob->row['seller_quantity']."".$ob->row['seller_sell'] ;?>
                                            </td>
                                            
                                            <td>
                                                 <?php echo $ob->row['minimam_purchase']."".$ob->row['seller_sell'] ;?>
                                            </td>
                                            
                                            
                                            
                                            <td>
                                                <a href="produce_update.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Update produce');"><b><i>Update</i></b></a> 
                                               
                                            </td>
                                          

                                            <td>
                                                <a href="produce_delete.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Delete produce');"><b><i>Delete</i></b></a>
                                            </td>
						                    <td>
                                                <img src=" <?php echo $ob->row['image']; ?>" width="100px" height="" class="img-thumbnail mx-auto d-block">
                                            </td>

                                    </tr>


                             <?php 
                                  }
                                    }
                             ?>
                        </table>
                   
         </div>
     </body>
</html>