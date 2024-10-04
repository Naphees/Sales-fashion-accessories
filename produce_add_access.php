<?php
	include('security.php');
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $type="image/jpeg";
        if($_FILES['image']['type']==$type)
            {
                
            }
        else
          {
                     echo"<script>alert('produce image with(.jpg extention) allow'); </script>";
                         echo"<script>location.replace('produce_add.php');  </script>     ";
          }
	

    
    class produce_add_access
        {
           
            public $sql;
            public $produce;
            public $quantity;
            public $rate;
            private $image;
            
            function husen()
                {
                 
                   $target_path="produce/";  // 8
                   $target_path=htmlspecialchars( $target_path.basename( ($_FILES['image']['name'])));
                   if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))
                       {
                           echo"success";
                       }
                       else
                       {
                          echo"<script>alert('sorry, this produce no add');</script>";
                          echo"<script>location.replace('produce_add.php');</script>"; 
                         
                       }
                      
                    $produce= htmlspecialchars($_POST['produce']) or die('produce error'); //  1
                    $quantity= htmlspecialchars($_POST['quantity']) or die('quantity error'); //  2
                    $rate= htmlspecialchars($_POST['rate']) or die('rate error');  // 3
                    $minimam_sell= htmlspecialchars($_POST['minimam_sell']) or die('minimam sell errors');  // 9
                    $seller_id= htmlspecialchars($_POST['seller_id']) or die('seller id errors');  //  17
                    $time=date("h:i:s") or die('time errors');  // 22
                    $date=date("d-m-y") or die('date errors');  //  23
				    $width= htmlspecialchars($_POST['width']);  // 5
				    $height= htmlspecialchars($_POST['height']); // 6
				    $weight= htmlspecialchars($_POST['weight']); // 7
                       $categories= htmlspecialchars($_POST['categories']); // 10
                       echo $categories;
                       $sell= htmlspecialchars($_POST['sell']);  //  4
                       echo $sell;
                       $about= htmlspecialchars($_POST['about']);  // 11
                       
                       $session=htmlspecialchars($_POST['session']);
                       $festival=htmlspecialchars($_POST['festival']);
                       $religion=htmlspecialchars($_POST['religion']);
                       $profit=htmlspecialchars($_POST['profit']);
                       $spend=htmlspecialchars($_POST['spend']);
                       $seller_rate=htmlspecialchars($_POST['seller_rate']);
                       $seller_quantity=htmlspecialchars($_POST['seller_quantity']);
                       $minimam_purchase=htmlspecialchars($_POST['minimam_purchase']);
                       $seller_sell=htmlspecialchars($_POST['seller_sell']);
                       $quantity_available=htmlspecialchars($_POST['quantity_available']);
                       $this->sql="INSERT INTO `produce`( `produce`, `quantity`, `rate`, `minimam_sell`, `seller_id`, `session`, `festival`, `religion`, `image`, `time`, `date`, `profit`, `width`, `height`, `weight`, `categories`, `sell`, `about`, `spend`, `minimam_purchase`, `seller_rate`, `seller_quantity`, `quantity_available`, `seller_sell`) VALUES ('".$produce."', '".$quantity."', '".$rate."' , '".$minimam_sell."' , '". $seller_id."', '".$session."',  '".$festival."' ,   '".$religion."', '".$target_path."' , '".$time."', '".$date."' , '".$profit."' , '".$width."' , '".$height."' ,'".$weight."', '".$categories."' , '".$sell."' , '".$about."' , '".$spend."' , '".$minimam_purchase."' , '".$seller_rate."' , '".$seller_quantity."' , '".$quantity_available."' , '".$seller_sell."') ";  
                   // $this->sql="INSERT INTO produce (produce , quantity ,rate ,image , minimam_sell , seller_id , time ,date ,width , height , weight , categories , sell ,about) VALUES ( '".$produce."' ,'".$quantity."','".$rate."' , '".$target_path."' , '".$minimam_sell."', '".$seller_id."', '".$time."', '".$date."' , '". $width."', '".$height ."','".$weight ."' , '".$categories."' ,'".$sell."' , '".$about."') " ;
                   
                }
        }
    $ob=new produce_add_access();
    $ob->husen();
    
    if($conn->query($ob->sql)==true)
    {
        echo"<script>alert('produce successfully add '); </script>";
         echo"<script>location.replace('produce.php ');  </script>     ";
    }
  
?>