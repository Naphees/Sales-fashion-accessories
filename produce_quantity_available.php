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
             $ob->sql= "SELECT * FROM `produce` WHERE `quantity_available` IS NOT NULL && `quantity_available` > 0  ORDER BY `id` DESC ";
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
                        <br><br>
                              
                              <h2 align="center" class="alert-success"><b><i>  All Produce  quantity available</i></b></h2>
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