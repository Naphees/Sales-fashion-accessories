<?php
	require('connection.php');
	class comp 
		{
			public $sql;
			public $row;
			public $result;
		}
	$ob=new comp();
				$ob->sql="SELECT * FROM produce_order  WHERE customer = '".$_SESSION['id']."' && order_complete IS NOT NULL";
				$ob->result=$conn->query($ob->sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require('design.php'); ?>
	</head>
	<body style="margin-top:2%">
		<div class="container-fluid">
		
					<?php require('link.php'); ?> 
			
					
			            <hr>
					<table class="table table-striped table-hover">
						<tr><th colspan="8"> <h3 style="text-align:center;"> ALL Complete order</h3></th></tr>
						<tr>
	 										 <th> S.N.  </th>
	 									 <th> Order Number  </th>
										  <th> Amount  </th>
												  <th> Payment Mode </th>
											  <th> Order Complete  </th>
	 											 <th>  Mobile  </th>
									  <th>Delivery Adress   </th>
	 											 <th> Produce List  </th>
						</tr>
						<?php
							if($ob->result->num_rows>0)
									{
							 $a =0;
							while($ob->row=$ob->result->fetch_assoc())
								{
						?>
							<tr>
											<td><?php  $a=$a+1; echo $a;   ?>   </td>
												<td><?php  echo $ob->row['id']; ?>   </td>
												<td><?php  echo $ob->row['amount']; ?>   </td>
											<td><?php  echo $ob->row['payment_mode']; ?>   </td>
												<td><?php  echo $ob->row['order_complete']; ?>   </td>
												<td><?php  echo $ob->row['mobile']; ?>   </td>
												<td><?php  echo $ob->row['village']; ?>   </td>
									<td> <a href="order_complete_produce.php?id=<?php echo $ob->row['id'];   ?>"> Produce List  </a>   </td>

							<tr>
						<?php
								}   }
						?>

					</table>
				
		</div>
	</body>
</html>