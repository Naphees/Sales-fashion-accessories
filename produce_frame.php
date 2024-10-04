
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    	include('connection.php');
        require('design.php'); 
       
        ?>
       
     <script>
              
        </script>
  
</head>
<body  style="margin-top:2%">
    <div class="container-fluid">
       
                        <?php
                            require('link.php');
                            require('search.php');
                            require('option.php');
                        ?>
               
             

                    <hr>
                     
                        <div class="row">
                       <?php
   $search=htmlspecialchars($_POST['search']);
  
   if(isset($search))
      {
           
            
            $_SESSION['produce']=$search;
      }
    
          
                   
     else
        {
          
        $id=$_REQUEST['id'];
        $filtersql="SELECT * FROM `produce` WHERE `rate` IS NOT NULL AND `id`='".$id."'  ";
       $filterresult=$conn->query($filtersql);
       if($filterresult->num_rows >0)
            {
             
              $filterrow=$filterresult->fetch_assoc();
            
              $_SESSION['produce']=$filterrow['produce'];
             
             }
              
        }
        
        if(isset($_SESSION['produce']))
        {

          $sql="SELECT * FROM `produce` WHERE `rate` IS NOT NULL AND `produce` LIKE'%{$_SESSION['produce']}' ||  `produce` LIKE'{$_SESSION['produce']}%' ||  `produce` LIKE'%{$_SESSION['produce']}%'|| `produce`='".$_SESSION['produce']."'  LIMIT 40 ";
        }
    ?>  
                    <?php
                    $result=$conn->query($sql);
                    if($result->num_rows >0)
                      {
                          
                          while($row=$result->fetch_assoc())
                             {
                                
                    ?>
                    
                            <div class="col-sm-4 produce" id="produce">
                                
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
                      else
                        {
                            echo"produce is not available";
                        }
                    
                    ?>
                       
                    </div>
                                  
      
    </div>
    
</body>
</html>