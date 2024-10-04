<?php
	include('connection.php');
                    $page=$_POST['page'];
                    $produce_id=$_POST['produce_id'];
                   $produce=$_POST['produce'];
                    $quantity=htmlspecialchars($_POST['quantity']);
                  
                  $rate=$_POST['rate'];
                      $amount= $rate * $quantity;
                     $amount=$rate*$quantity;
                     $customer_id=$_POST['customer_id'];
                      $time=date("h:i:s");
                      $date=date('d-m-y');
                 
		$seller_id=$_POST['seller_id'];
		$seller_rate=$_POST['seller_rate'];
			 $image=$_POST['produce_image'];   
         $sell=$_POST['sell'];
          $profit=$_POST['profit'];
         $profit=$profit*$quantity;
         $profit;
          $spend=$_POST['spend'];
          $spend=$spend*$quantity;
          $spend;
          $seller_amount=(int)$quantity*(int)$seller_rate;
      
  
         
         
         
                /*    $sel="SELECT * FROM `produce` WHERE `id`='".$produce_id."' ";
                    $show=$conn->query($sel);
                    if($show->num_rows >0)
                    {
                    $show1=$show->fetch_assoc();
                    $show1['quantity_available'];
                    
                                         if($quantity > $show1['quantity_available'] )
                           
                                                    {
                                                        $quantity;
                                                        $show1['quantity_available'];
                                                         $req=$quantity-(int)$show1['quantity_available'];
                                                        $req=$req +(int)$show1['requirement'];
                                                        $req;
                                                        // availbale is 0
                                                        // requarement
                                                        $avl=0;
                                                        $upda="UPDATE `produce` SET `quantity_available`='".$avl."' , `requirement`='".$req."' WHERE `id`='".$produce_id."' ";
                                                        if($conn->query($upda)==TRUE)
                                                           {
                                                               echo"";
                                                               
                                                           }
                                                    }
                           
                                     else if($quantity < $show1['quantity_available'] )
                           
                                            {
                                                
                                                    $quantity;
                                                $show1['quantity_available'];
                                                        $avai=$show1['quantity_available']-$quantity;
                                                    $avai;
                                                        // avlable
                                                          $upda="UPDATE `produce` SET `quantity_available`='".$avai."'  WHERE `id`='".$produce_id."' ";
                                                        if($conn->query($upda)==TRUE)
                                                           {
                                                               echo"";
                                                               
                                                           }
                                            }
                           
                                        else
                                           {
                                               
                                                    $quantity;
                                                    $show1['quantity_available'];
                                                        //avaible is 0 value
                                                        
                                                        $avl1=0;
                                                        $req1=0;
                                                         $upda="UPDATE `produce` SET `quantity_available`='".$avl1."' , `requirement`='".$req1."' WHERE `id`='".$produce_id."' ";
                                                        if($conn->query($upda)==TRUE)
                                                           {
                                                               echo"";
                                                               
                                                           }
                                           }
                           
                           
                           
                           
                           
                    }
                    else
                       {
                           echo"fail";
                       }
                 
                  */
                   $sql="INSERT INTO `sell`( `customer_id` , `produce` , `produce_id` , `rate` , `quantity` , `amount`, `time` , `date` , `produce_image` , `seller_id` , `sell` , `profit` , `spend` ,`seller_rate`,`seller_amount` ) VALUES('".$customer_id."','".$produce."', '".$produce_id."', '".$rate."', '".$quantity."', '".$amount."', '".$time."', '".$date."' , '".$image."' , '".$seller_id."' , '".$sell."' ,'".$profit."' ,'".$spend."', '".$seller_rate."' ,'".$seller_amount."')";
                                        if($conn->query($sql)==TRUE)
                                         {
                                        
                                            $_SESSION['produce']=$produce;
                                            echo"<script>alert('your produce successfully add in bill');  </script>";
                                            // location replace as per requirment 
                                            echo"<script> location.replace('produce_frame.php'); </script>";
                                         }
                                         else
                                         {
                                            echo"errors".$sql."<br>".$conn->error;
                                         }
		
		          
?>
