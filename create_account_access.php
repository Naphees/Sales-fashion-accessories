<?php
         $jpg="image/jpeg";
                   
                    if($_FILES['image']['type']==$jpg)
                                {
                                   // echo $_FILES['image']['type'];
                            

    class naphees 
        {
            public $name;
            private $password;
            
            
            private $mobile;
            private $pincode;
            private $email;
            private $webside;
            private $birth;
            public  $image;
            private $village;
            protected $town;
            public $district;
            protected $state;
            protected  $country;
            private $time;
            protected $date;
	    public $business;
            private $con;
            public $qry;
            function __construct()
                {
                   $this->name= htmlspecialchars($_POST['name']);
                  $this->password= htmlspecialchars($_POST['password']);
                     $con=new mysqli("localhost", "impprfrh_husen", "Husen_9997_bca", "impprfrh_i.m.p.db") or die('connection errors');  
                    // $con=new mysqli("localhost" ,"root","","i.m.p.") or die('connection errors');
                      $qry= "SELECT `password` ,`name` FROM `customer` WHERE `password`='".$this->password."' AND  `name`='".$this->name."'  ";
                      $result=$con->query($qry);
                      if($result->num_rows>0)
                        {
                            echo"<script>alert('please  change password.this is already ');  </script> ";
                            echo"<script>location.replace('create_account.php');  </script>  ";
                        }
                        else
                         {
                   ?>
                   <!-- email verify group start -->
                   <?php  

                   ?>
                   
                   <!-- end email verify group -->
                   
                   
                   
                   <?php
                   
                        $this->mobile= htmlspecialchars($_POST['mobile']);
                        
                        
                        
                     $this->pincode= htmlspecialchars($_POST['pincode']);
                     $this->email= htmlspecialchars($_POST['email']);
                      $this->webside= htmlspecialchars($_POST['webside']);
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     $this->birth= htmlspecialchars($_POST['birth']);
                   
                   $this->image="customer_image/";
                   
                    
                    
                    
                    
                   $this->image=$this->image.basename( htmlspecialchars($_FILES['image']['name']));
                   if(move_uploaded_file( htmlspecialchars($_FILES['image']['tmp_name']),$this->image))
                        {
                                echo"<br>image successfully";
                      
                   echo"<br>village". $this->village= htmlspecialchars($_POST['village']);
                   echo"<br>town". $this->town= htmlspecialchars($_POST['town']);
                   echo"<br>diist".$this->district= htmlspecialchars($_POST['district']);
                   echo"<br>state".$this->state= htmlspecialchars($_POST['state']);
                   echo"<br>country". $this->country= htmlspecialchars($_POST['country']);
                  echo"<br>". $this->time=date("H:i");
                   echo"<br>". $this->date=date("d-m-y");
                  echo"<br>business".$this->business= htmlspecialchars($_POST['business']);
                   
                   $this->qry= " INSERT INTO customer(name , password , mobile , birth ,image , village,town,district,state, country,time,date, business ,pincode , email , webside  ) VALUES ('".$this->name."' , '".$this->password."' , '".$this->mobile."'  , '".$this->birth."' , '".$this->image."' , '".$this->village."', '".$this->town."', '".$this->district."', '".$this->state."', '".$this->country."' ,'".$this->time ."', '".$this->date."' , '".$this->business ."' , '".$this->pincode."' , '".$this->email."' , '".$this->webside."' ) ";
                   if($con->query($this->qry)==true) 
                   {
                       echo"<script>alert('your account successfully created'); </script>";
                       echo"<script>alert('dear customer , we call for varify in 24 hours');</script>";
                       echo" <script> location.replace('index.php');  </script> ";
                   }
                     else
                   {
                      echo"<script> location.replace('index.php');</script> " or die('else errors');
                   } 
                   
                        }
                  }
                }
        }

    $ob=new naphees();
       }
                    else
                       {
                          echo"<script>alert('  image with(.jpg extention)  allow ');  </script> ";
                            echo"<script>location.replace('create_account.php');  </script>  ";
                       }

   
?>