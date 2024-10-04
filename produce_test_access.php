<?php
     require('security.php');
   abstract class naphees 
        {
           
          
            public $produce_id;
            public $produce;
            public $rate;
        
            public $profit;
          
            public $sell_amount;
            function __construct()
                {
                 
                   echo"<br> produce code  ".$this->produce_id= htmlspecialchars($_POST['produce_id']);
                   echo"<br> produce   ".$this->produce= htmlspecialchars($_POST['produce']);
                   echo"<br> rate ".$this->rate= htmlspecialchars($_POST['rate']);
                 
                   echo"<br> profit ".$this->profit= htmlspecialchars($_POST['profit']);
                 
                  $this->sell_amount=$this->profit+$this->rate;
                 
                }
        }
    class  husen extends naphees 
        {
             function __destruct()
                {
                   
                }
        }
        $ob=new husen();
      
        $qry="UPDATE produce SET profit='".$ob->profit."' , sell_amount='".$ob->sell_amount."' , produce='".$ob->produce."'  WHERE id='".$ob->produce_id ."'     ";
        if($conn->query($qry)===true)
            {
                echo"successfully";
                echo"<script>alert('successfully add this produce');</script>";
                echo"<script>location.replace('produce_test.php');  </script>";
              

            }
        else
            {
                echo"fail errors";
            }
?>