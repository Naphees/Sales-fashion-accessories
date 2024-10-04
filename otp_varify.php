<?php
	include('security.php');
	$varify=htmlspecialchars($_POST['varify']);
		$varify1=htmlspecialchars($_POST['varify1']);
		$id=htmlspecialchars($_POST['id']);
	
	  $com="complete";
	  if($varify==$varify1)
	    {
	       // $sql="UPDATE produce_order SET order_complete=".$com." WHERE id=".$id."";
	       $sql="UPDATE `produce_order` SET `order_complete`='".$com."' WHERE `id`='".$id."'   ";
	        if($conn->query($sql)==TRUE)
	            {
	              
	                echo"<script>alert('order complete successfully ');</script>";
	                echo"<script>location.replace('customer_order_complete.php');</script>";
	            }
	    }
	    else
	      {
	            echo"<script>alert('Wrong OTP entered ');</script>";
	                echo"<script>location.replace('customer_order_complete.php');</script>";
	      }
?>
