<?php
  require('security.php');
 echo"<br> id".$id=htmlspecialchars($_POST['id']);
  echo"<br> produce".$produce=htmlspecialchars($_POST['produce']);
   echo"<br>seller_rate".$seller_rate=htmlspecialchars($_POST['seller_rate']);

     echo"<br>sell".$sell=htmlspecialchars($_POST['sell']);
     echo"<br>requirement".$requirement=htmlspecialchars($_POST['requirement']);
    
      echo"<br>seller_id".$seller_id=htmlspecialchars($_POST['seller_id']);
            
            
          
            
                   
                   $r=0;
                 
                 
               $qry="UPDATE produce_requirement SET quantity_requirement=".$r." WHERE produce_id=".$id."";
                 
                 
                 
                 
                            if($conn->query($qry)==TRUE)
	                            	{
			                        	echo"<br><br>success";
		                               	 echo"<script>location.replace('produce_requirement.php');   </script>";
	                            	}
	                        else
	                        	{
                                    echo"fail";
	                        	}
                    
           
?>