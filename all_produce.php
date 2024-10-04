<?php
  require('connection.php');
  
   $sql="SELECT * FROM `produce` WHERE `rate` IS NOT NULL && `id` >552 && `id` <590 ORDER BY `id` ASC ";
  $produce= "produce_categories_image/toys.webp" ;
       // require('produce_frame.php');
  $sql1="SELECT COUNT(produce) AS produces FROM `produce`";  
  $r=$conn->query($sql1);
  $pro=$r->fetch_assoc();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('design.php'); 
    ?>
    
  
</head>
<body  style="margin-top:2%">
    <div class="container-fluid">
       
                        <?php
                            require('link.php');
                        ?>
               
                    <?php require('search.php'); ?>
                    <hr>
                     
                        <div class="row">
                       <div class="col-sm-12">
                        <h2>Produces available :  <?php  echo $pro['produces'];     ?> </h2>
                       </div>  
                    <?php
                    $result=$conn->query($sql);
                    if($result->num_rows >0)
                      {
                          while($row=$result->fetch_assoc())
                             {
                                
                    ?>
                    
                            <div class="col-sm-4">
                                   <a href="produce_purchase.php?id=<?php echo $row['id']; ?>">			
                                   	                          
                                                             
                                                              <p class="text-center">
                                                                    <img src="<?php echo $row['image'];?>" alt="not avialable" width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
                                                                    
                                                              <?php echo $row['produce']; ?> 
                                    	
                                                                 <?php echo $row['rate'];  echo"&nbsp Rupees  per ".$row['sell'];?> 
                                                            </p>
                                </a>
                            </div>
                            
                   
                    <?php
                             }
                      }
                    
                    ?>
                       
                    </div>
                                  
      
    </div>
    
</body>
</html>