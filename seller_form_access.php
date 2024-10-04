<?php
	include('connection.php');
	class na 
		{
		  public $sql;
		  public $result;
		  public $row;
		}
		$ob=new na();
			
				$id_number= htmlspecialchars($_POST['id_number']);
				 	$firm= htmlspecialchars($_POST['firm']);
				 
				 
				$firm_adress= htmlspecialchars($_POST['firm_adress']);
				$account_number= htmlspecialchars($_POST['account']);
			    $ifsc_code= htmlspecialchars($_POST['ifsc_code']);
				$produce_sell= htmlspecialchars($_POST['produce_sell']);
				$gstin= htmlspecialchars($_POST['gstin']);
				$mobile= htmlspecialchars($_POST['mobile']);
				$email= htmlspecialchars($_POST['email']);
			    $webside= htmlspecialchars($_POST['webside']);
	             $date=date("d-m-y");
				$time=date("H:i:s");
				// seller test
				$test="SELECT `id_number` FROM `seller` WHERE `id_number`='".$id_number."' ";
				$test_store=$conn->query($test);
				if($test_store->num_rows>0)
				   {
					echo"<script>alert('already , seller'); </script>";
					echo"<script>location.replace('dashboard.php'); </script>";				
				   }


				// seller test and
				
				else
					{
						$ob->sql="INSERT INTO seller(id_number , seller ,  firm , firm_adress, account_number , ifsc_code , produce_sell , gstin , mobile ,  email , webside , date , time  ) VALUES ('".$id_number."' , '".$_SESSION['name']."' , '".$firm."' , '".$firm_adress ."' , '".$account_number ."'  ,'".$ifsc_code."', '".$produce_sell ."', '".$gstin ."', '".$mobile."'  , '".$email."'  ,'".$webside ."', '".$date."' , '".$time."'  ) ";		
						if($conn->query($ob->sql)===true)
							{	
								echo"<script>alert('your shop successfully create, we will contact you '); </script>";
									echo"<script>alert('Thanks to join '); </script>";
								echo"<script>location.replace('dashboard.php'); </script>";					
							}
					}	
?>