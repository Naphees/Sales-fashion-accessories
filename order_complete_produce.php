<?php 
	require('connection.php');
	class order 
	   { 
		public $sql;
		public $row;
		public $result;
		
			

	   }
	$ob=new order();
	$id=$_REQUEST['id'];
			$ob->sql="SELECT * FROM `sell` WHERE `order_number`='".$id."'   ";
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
                       
					  
								<button onclick="document.location='order_complete.php' "  class=" btn btn-success">
											   <h3><b><i>	Back</i></b></h3>
								</button>
	                            <br><br>
							<table class="table table-striped table-hover ">
								<tr> 
									<th colspan="8" style="text-align:center;">
	   									<b><i><h2>All Produce Of Complete</h2></i></b>
	   									<b><i><h6><?php echo"Order Number : ". $id;  ?></h6></i></b>
									</th>

								</tr>
  								<tr>
										<th>S.N.   </th>
										<th> Produce  </th>
												<th> P.Code  </th>
												<th> Rate  </th>
											<th> Quantity  </th>
										<th>Amount   </th>
										<th>Image</th>
										<th>again purchase</th>
							    </tr>
								<?php
								        $a=0;
									if($ob->result->num_rows>0)
											{
											  while($ob->row=$ob->result->fetch_assoc())
														{

								?>
 									<tr>	
										<td><?php $a=$a+1; echo $a; ?></td>
 												<td><?php echo $ob->row['produce']; ?></td>
											 	<td><?php echo $ob->row['produce_id']; ?></td>
	 												<td><?php echo $ob->row['rate']; ?></td>
												 	<td><?php echo $ob->row['quantity']."&nbsp;&nbsp;".$ob->row['sell']; ?></td>
													 	<td><?php echo $ob->row['amount']; ?></td>
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