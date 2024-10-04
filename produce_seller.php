 <?php
  require('security.php');
 // echo $_SESSION['seller_id'];
  $id=htmlspecialchars($_REQUEST['id']);
  
?>
   <?php
        class produce
            {
               
                public $sql;
                public $row;
                public $result;        
                    
            }
            $ob=new produce();
             $ob->sql= "SELECT * FROM produce where  `seller_id`='".$id ."'  ";
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
                         <?php  include('search1.php');  ?>
                        <hr>
                                                                            
                    
                        <button type="button" class="btn btn-lg btn-warning" onclick="document.location='seller_produce_add.php' ">
                                    <b><i>Add Produce</i></b>
                        </button>
                        <br><br>
                          <h2 align="left"><b><i>seller id <?php echo $id; ?></i></b></h2>
                        
                              
                         <h2 align="center" class="alert-success"><b><i> Your All Produce</i></b></h2>
                        <table class="table table-hover  table-striped table-responsive">
                      
                            
                            <tr align="center">
                                <th>
                                    <b><i>S.N.</i></b>
                                </th>  
                                <th>
                                    <b><i>Produce</i></b>
                                </th>
                                <th>
                                    <b><i>Produce Code</i></b>
                                </th>
                                <th>
                                    <b><i>Quantity</i></b>
                                </th>
                                <th>
                                    <b><i>Price</i></b>
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
                                    <b><i>Update</i></b>
                                </th>
                                <th>
                                    <b><i>Delete</i></b>
                                </th>
                                <th><b><i>require</i></b></th>
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
                                                 <?php echo $ob->row['id']; ?> 
                                            </td>
					
                                            <td>

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
                                             <!--   <a href="produce_update.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Update produce');"><b><i>Update</i></b></a> -->
                                                 update
                                            </td>
                                          

                                            <td>
                                                <a href="produce_delete.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Delete produce');"><b><i>Delete</i></b></a>
                                            </td>
                                            <td><a href="">require</a><td>
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