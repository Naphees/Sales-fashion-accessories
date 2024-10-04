<?php
	include('security.php');
	
    class produce_update_access
     {          public $image;
            private $id;
            protected $produce;
           
            protected $quantity;
            private $rate;
           
            public $sql;
            function con()
                {
                  echo  $this->image=htmlspecialchars($_POST['image']);
                  echo"<br><br><br>";
                    $this->id= htmlspecialchars($_POST['id']);
                    
                    $this->produce= htmlspecialchars($_POST['produce']);
                  #  $this->produce_code=$_POST['produce_code'];
                    $this->quantity= htmlspecialchars($_POST['quantity']);
                    $this->rate= htmlspecialchars($_POST['rate']);
		    $width= htmlspecialchars($_POST['width']);
		    $height= htmlspecialchars($_POST['height']);
		     $weight= htmlspecialchars($_POST['weight']);
		     $minimam_sell= htmlspecialchars($_POST['minimam_sell']);
             $sell= htmlspecialchars($_POST['sell']);
             echo $sell;
            
             
             
             $profit=htmlspecialchars($_POST['profit']);
              $spend=htmlspecialchars($_POST['spend']);
               $seller_id=htmlspecialchars($_POST['seller_id']);
                $seller_rate=htmlspecialchars($_POST['seller_rate']);
                 $seller_quantity=htmlspecialchars($_POST['seller_quantity']);
                  $minimam_purchase=htmlspecialchars($_POST['minimam_purchase']);
                   $seller_sell=htmlspecialchars($_POST['seller_sell']);
             
             
                    #$this->con=mysqli_connect("localhost" ,"root" , "" ,"i.m.p.") or die('connection errors');
                    $this->sql="UPDATE  produce SET produce='".$this->produce."' ,  quantity='".$this->quantity."' , rate='".$this->rate."' , width='".$width."' , height='".$height."' , weight='".$weight."' , minimam_sell='".$minimam_sell."' , sell='".$sell."'  , profit='".$profit."' , spend='".$spend."' , seller_id='".$seller_id."' , seller_rate='".$seller_rate."' , seller_quantity='".$seller_quantity."' , minimam_purchase='".$minimam_purchase."' , seller_sell='".$seller_sell."' WHERE id='".$this->id."'      ";
                }
        }
    $ob=new produce_update_access();
	$ob->con();
    if($conn->query($ob->sql))
        {
            echo"<script>alert('Update is sucessfully');</script>";
            echo"<script>location.replace('produce.php');</script>";
        }

?>