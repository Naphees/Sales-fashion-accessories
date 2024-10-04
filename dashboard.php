<?php
	include('connection.php');
   class naphees 
        {
            public $sql;
            public $result;
            public $row;
        }
        $ob=new naphees();

     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <?php require('design.php');?>
            <title>Dashboard</title>
    </head>
<body  style="margin-top:2%">
    <div class="container-fluid" >
       
        <?php include('link.php');
           require('search.php');
           require('option.php');
        ?>    
           
      
        <hr>
        
         <div class="jumbotron">
            
              <div class="row">
                 
               <?php
                   $ob->sql ="SELECT DISTINCT `produce`,`id`,`image` FROM `produce` WHERE `rate` IS NOT NULL limit 30 ";
    
      $result=$conn->query($ob->sql);
                    if($result->num_rows >0)
                    {
                        while($row=$result->fetch_assoc())
                           {
                               
                          
                    
                    ?>
                    
                     <div class="col-sm-4">
                        <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
                            
                               
                                                        <img src="<?php echo  $row['image']; ?>" alt="" width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
                                                    <p class="text-center"><?php echo $row['produce'] ?> </p>

                            
                            </button>
                        </form>    
                    </div>
                    
                    
                    
                    <?php
                           }
                    }
                    
                    else
                    {
                        ?>
                        
                        <?php
                    }
                    ?>
                    

                 
                                   
                                   
             </div>
                    
        </div>
    </div>
      
    
</body>
</html> 



