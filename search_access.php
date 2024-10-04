<?php
	include('connection.php');
	class search extends connection
		{
		 public $search;
		 public $customer_id;
		 
		}
		$ob=new search();
		 $ob->search=htmlspecialchars($_POST['search']);
		 $ob->customer_id=$_POST['customer_id'];
		 $time=date("h:i:s") or die('time errors');
		 $date=date("d-m-y") or die('date errors');
		 $test="SELECT `search` FROM `search` WHERE `search`='".$ob->search."' ";
		 $test_access=$conn->query($test);
		 if($test_access->num_rows >0)
		 {	$add="add";
			$sql="INSERT INTO `search`(`customer_id` ,`search` ,`time` ,`date` ,`add`) VALUES('".$ob->customer_id."', '".$ob->search."', '".$time."', '".$date."' , '".$add."')";
			if($conn->query($sql)===TRUE)
						{
							//echo"successfully add ";
						}	
		 }
		 else
		 	{
				 $sql="INSERT INTO `search`(`customer_id` ,`search` ,`time` ,`date`) VALUES('".$ob->customer_id."', '".$ob->search."', '".$time."', '".$date."')";
				if($conn->query($sql)===TRUE)
							{
								///echo"successfully add ";
							}
			}

		
			$sel="SELECT `page` FROM `produce_page_search` WHERE `search1`='".$ob->search."' OR  `search2`='".$ob->search."' OR  `search3`='".$ob->search."' OR `search4`='".$ob->search."' OR `search5`='".$ob->search."' OR `search6`='".$ob->search."' OR `search7`='".$ob->search."' OR `search8`='".$ob->search."' OR `search9`='".$ob->search."' OR `search10`='".$ob->search."' OR `search11`='".$ob->search."' OR `search12`='".$ob->search."' OR `search13`='".$ob->search."' OR `search14`='".$ob->search."' OR `search15`='".$ob->search."'   ";
			$check=$conn->query($sel);
			if($check->num_rows >0)
				{
				  $page_access=$check->fetch_assoc();
				  
			
	
	
		
						$a="<script>location.replace('".$page_access['page']."');</script>";
						echo $a;
				}
				else
						{
						
							echo"<script>location.replace('dashboard.php');</script>";
						}

				
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require('design.php');  ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container-fluids">
			<div class="row">
				  	<div class="col col-12">
				  			<?php  require('logo.php'); ?>
					  </div>
					  <div class="col col-12">
				  			<?php  require('search.php'); ?>
					  </div>
					  <div class="col col-2">
				  			<?php require('left.php');?>
					  </div>
					  <div class="col col-10">
				  			  <h2 style="text-align:center;">
				
					 Sorry , this is not avialable
						<br> Please, change meaning and try again
				</h2>
					  </div>
			</div>
	</div>
</body>
</html>