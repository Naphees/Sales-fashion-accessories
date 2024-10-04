<?php
	require('security.php');
	 $id=htmlspecialchars($_REQUEST['id']);
            echo $id;
            
            
             $sql_s="SELECT * FROM `produce` WHERE `id`='".$id."'  ";
               $result=$conn->query($sql_s);
                if($result->num_rows>0)
                {
                        $row=$result->fetch_assoc();
                        echo $row['image'];
                       if(unlink($row['image']))
                       {
                           echo"successfully delete";
                       }
                }
                else
                 {
                     echo"<br> select fail";
                 }
	
	

    class produce_delete
        {
           
            public $sql;
            protected $id;
            function con()
                {
                    $this->id=htmlspecialchars($_REQUEST['id']);
                   
         
                    $this->sql="DELETE FROM produce WHERE id='".$this->id."'   ";
                }
        }
    $ob=new produce_delete();
	$ob->con();
    if($conn->query($ob->sql)==TRUE)
        {
           
            echo"<script>location.replace('produce.php');</script>   ";
            echo"<script> alert('Produce Delete');</script>  ";
           
        }  
?>