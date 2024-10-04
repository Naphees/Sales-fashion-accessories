<?php
 include('security.php');
	class produce
		{
		 public $sql;
		 public $row;
		 public $result;
		}
  $ob=new produce();
  $id=$_REQUEST['id'];
				 
  $ob->sql="SELECT * FROM `sell` WHERE `order_number`=".$id."  ";
  $ob->result=$conn->query($ob->sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require('design.php'); ?>
	</head>
	<body>
		<div class="container-fluid">
		
					<?php  include('left1.php'); ?>
				<?php require('search1.php'); ?>
				 <hr>
			
					<button onclick="document.location='order_current1.php'   "   class=" btn btn-lg btn-success">

						<b><i> <h4> Back   </h4></i></b>
					</button>
				    <br><br>
					<table class="table table-striped table-hover table-hover">
								<tr><th colspan="9"><h3 style="text-align:center;"> All produce of current order</h3><h6 style="text-align:center;"><?php echo"Order Number : ".$id; ?></h6></th></tr>
								<tr>
	  								  	<th> S.N.    </th>
	      								 <th> Produce    </th>
		  								 <th>P. Code     </th>
		   								<th> Rate    </th>
		    							<th> Quantity    </th>
			  							 <th> Amount    </th>
			  							 <th> Time    </th>
			  							 <th> Date    </th>
			  							 <th>image</th>
								<tr>
 								<?php
   									 if($ob->result->num_rows>0)
											{
												$a=0;
  											 while($ob->row=$ob->result->fetch_assoc())
													{

								?>
										<tr>
												<td><?php $a=$a+1; echo $a;         ?>       </td>
												<td><?php echo $ob->row['produce'];          ?>       </td>
													<td><?php echo $ob->row['produce_id'];          ?>       </td>
												<td><?php echo $ob->row['rate'];          ?>       </td>
												<td><?php echo $ob->row['quantity']."&nbsp;&nbsp;".$ob->row['sell'];          ?>       </td>
														<td><?php echo $ob->row['amount'];          ?>       </td>
												<td><?php echo $ob->row['time'];          ?>       </td>
												<td><?php echo $ob->row['date'];          ?>       </td>
													<td><img src="<?php echo $ob->row['produce_image'];?>"  width="100px" height="" class="img-thumbnail mx-auto d-block"></td>
							
							
										</tr>

								<?php
											}  }
								?>
							</table>
				
		</div>
	</body>
</html>