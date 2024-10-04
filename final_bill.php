<?php
  include('connection.php');
  class naphees 
   {
      public $sql;
      public $result;
      public $row;
      public $sql1;
      public $test;
      public $test_result;
   }
   $ob=new naphees();
     $ob->test="SELECT * FROM sell WHERE customer_id=".$_SESSION['id']." AND order_number IS NULL   ";
         $ob->test_result=$conn->query($ob->test);
         if($ob->test_result->num_rows>0)
     
            {}
      else
         {
            echo"<script> alert('before purcahse produce');  </script>";
            echo"<script> location.replace('dashboard.php');  </script>";
         }




    $ob->sql="SELECT * FROM sell WHERE customer_id=".$_SESSION['id']."  AND order_number IS NULL ";
    $ob->sql1="SELECT SUM(amount) AS `total` FROM sell WHERE customer_id=".$_SESSION['id']." AND order_number IS NULL   "; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require('design.php');  ?>
   
   <title>final bill</title>
</head>
<body style="margin-top:2%"> 
  
    <div class="container-fluid">
     
         <?php  include('link.php');?>  <hr> 
        
                
                    
                      
                          
                         <table class="table table-hover table table-striped tabel-responsive">
                                  <tr>
                                       <th colspan="9"> <h2> <i> Final Bill of purchase produce  </i>  </h2> </th>
                                 </tr>
                                  <tr width="100%">
                                         <th> S.N.  </th>
                                         <th> Produce   </th>
                                         <th> Produce code    </th>
                                         <th> Rate     </th>
                                         <th> Quantity        </th>
                                         <th> Amount       </th>
                                         <th>   Update     </th>
                                            <th> Delete      </th>
                                          <th width="20%">   Image      </th>
                                   </tr>
                                    <?php  
                                          $ob->result=$conn->query($ob->sql);
                                          if($ob->result->num_rows>0)
                                              { $a=1;
                                              while($ob->row=$ob->result->fetch_assoc())
                                                {
                                                

                                                
                                    ?>
                                   
                                      <tr width="100%">
                                         <th> <?php  echo $a; $a=$a+1;  ?>  </th>
                                         
                                         <th> <?php echo $ob->row['produce'];  ?>    </th>
                                         <th> <?php echo $ob->row['produce_id'];  ?>     </th>
                                         <th><?php echo $ob->row['rate'];  ?>         </th>
                                         <th>  <?php echo $ob->row['quantity']."&nbsp;&nbsp;".$ob->row['sell'];  ?>       </th>
                                         <th> <?php echo $ob->row['amount'];  ?>        </th>
                                         <th>    <a href="produce_purchase_update.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Update produce');"><b><i>Update</i></b></a> </th>
                                            <th>   <a href="produce_purchase_delete.php?id=<?php echo $ob->row['id'];?>" onclick="return confirm('Are your sure ? Delete produce');"><b><i>Delete</i></i></b></a>     </th>
                                         <th width="20%">  <img src=" <?php echo $ob->row['produce_image'];  ?>" width="100px"    >    </th>                                    
                                       </tr>
                                    <?php  }   } ?>
                                    <tr>
                                        <th colspan="5" style="text-align:right;">Total Amount -</th>
                                        <th>
                                            <?php  
                                               $ob->result=$conn->query($ob->sql1);
                                                   if($ob->result->num_rows>0)
                                                         {
                                                            $ob->row=$ob->result->fetch_assoc();
                                                            echo $ob->row['total'];
                                                         }
                                             ?>       
                                                
                                        </th>
                                    </tr>

                          </table>
                          
                    
                          <br><br>
                        <?php
                         if($ob->row['total']>=1000)
                           {
                             
                               ?>
                               <p class="text-center"> <button onclick="document.location='order_delivery.php?id=<?php echo $ob->row['total'];?>'  " class="btn btn-lg btn-success ">Add delivery Address</button></p> 
                          <?php
                          }
                           else
                             {
                          ?> 
                            <p class="text-center"> <button onclick="" class="btn btn-lg btn-danger "><b><i>your bill amount must above 1000</i></b></button></p>
                            
                           
                         <?php        
                             }
                        ?>
                          
                        
                          
                          <br><hr><br>
             
      
    </div>
 
    </body>
</html>
