<?php
	include('connection.php');
   class naphees 
        {
            public $sql;
            public $result;
            public $row;
        }
        $ob=new naphees();
        $cate="Watch_belt_sunglasses_paras";
    $ob->sql ="SELECT * FROM `produce` WHERE `categories`='".$cate."' ";
     # $ob->result=$conn->query($ob->sql);  
      $result=$conn->query($ob->sql);
     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <?php require('design.php');?>
    </head>
<body  style="margin-top:2%">
    <div class="container-fluid" >
       
        <?php include('link.php');?>    
           
        <?php include('search.php');?>
        <hr>
        
         <div class="jumbotron">
            
              <div class="row">
              <?php
                    if($result->num_rows >0)
                    {
                        while($row=$result->fetch_assoc())
                           {
                               
                          
                    
                    ?>
                    
                     <div class="col-sm-4">

                                 <a href="produce_frame.php?id=<?php echo $row['id'];?>">
                                                        <img src="<?php echo  $row['image']; ?>" alt="" width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
                                                    <p class="text-center"><?php echo $row['produce'] ?> </p>

                            </a>
                    </div>
                    
                    
                    
                    <?php
                           }
                    }
                    
                    ?>
                    
             </div>
                    
        </div>
    </div>
      
    
</body>
</html> 


