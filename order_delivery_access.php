<?php
error_reporting(E_ALL);
  include('connection.php');
  class naphees 
    {
      public $sql;
      public $result;
      public $row;
    }
    $ob=new naphees();
                     $customer_id= htmlspecialchars($_POST['customer_id']);
                     $amount= htmlspecialchars($_POST['amount']);
            $mobile= htmlspecialchars($_POST['mobile']);
                     $time=date("H:i:s");
                 $date=date("d-m-y");
                      $village= htmlspecialchars($_POST['village']); 
                  $town= htmlspecialchars($_POST['town']);
                      $district= htmlspecialchars($_POST['district']);
                  $state= htmlspecialchars($_POST['state']);
                      $country= htmlspecialchars($_POST['country']);
                      $pincode= htmlspecialchars($_POST['pincode']);   
                      $varify_email=htmlspecialchars($_POST['varify_email']);
                     $sql =" INSERT INTO produce_order(customer, amount ,  mobile , time , date , village , town , district , state , country , pincode , varify_email) VALUES ('".$customer_id."','".$amount."', '".$mobile."','".$time."','".$date."','".$village."','".$town."','".$district."','".$state."','".$country."','".$pincode."' ,'".$varify_email."' )" or die('errors') ;     
                   if( $conn->query($sql)==TRUE)
                   {
                      $id=$conn->insert_id;

                   
                            
                       
                      
               
                        $qry="UPDATE `sell` SET `order_number`='".$id."',`requirement_place`='".$pincode."'  "."WHERE `customer_id`=".$_SESSION['id']." && `order_number` IS NULL ";
                        if($conn->query($qry)==TRUE)
                          {
                             // requirement code start 
                             $req="INSERT INTO `produce_requirement`( `produce_id`, `produce`, `seller_rate`, `quantity_requirement`,  `sell`,`requirement_place`,  `produce_image`,`seller_id`,`seller_amount`)     SELECT produce_id,produce,seller_rate,quantity,sell,requirement_place,produce_image,seller_id,seller_amount FROM sell WHERE order_number='".$id."'   ";
                             if($conn->query($req)==TRUE)
                                 {
                                   
                                 }
                             else
                                {
                                    echo "fail try again";
                                }
                             
                             // requirement code finish
                              
                              
                              
                            echo"update successfully";
                            // location replace acoording to customer bussiness
                             echo"<script> alert('your order successfully add'); </script>";
                            echo"<script> location.replace('dashboard.php'); </script>";
                          }  
                        }
                        
                        
                      
 ?>