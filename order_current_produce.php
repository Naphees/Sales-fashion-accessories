<?php
 include('connection.php');
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
	<body style="margin-top:2%">
		<div class="container-fluid">
			
					<?php  include('link.php'); ?>
			
				
					<hr>
			
			
							<a href="order_current.php"><button  class=" btn-lg btn-success">Back</button></a>
								<br><br>
							<table class="table table-striped table-hover table-hover">
								<tr><th colspan="8"><h3 style="text-align:center;"> All produce of current order</h3><h6 style="text-align:center;"><?php echo"Order Number : ".$id; ?></h6></th></tr>
								<tr>
	  								  	<th> S.N.    </th>
	      								 <th> Produce    </th>
		  								 <th>P. Code     </th>
		   								<th> Rate    </th>
		    							<th> Quantity    </th>
			  							 <th> Amount    </th>

			  							 <th>image</th>
			  							 <th>again purchase</th>
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
											
												<td><img src="<?php echo $ob->row['produce_image'];?>"  width="100px" height="" class="img-thumbnail mx-auto d-block"></td>
							                      <td>  <a href="produce_purchase.php?id=<?php echo $ob->row['produce_id'];?>" onclick="return confirm('Are your sure ? purchase again');"><b><i>again purchase</i></b></a> </td>
										</tr>

								<?php
											}  }
								?>
							</table>
								
	</div>
</body>
</html>