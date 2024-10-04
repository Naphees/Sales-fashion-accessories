<?php 
	include('security.php');
	$sql1="SELECT SUM(seller_amount) AS total  FROM produce_requirement WHERE quantity_requirement IS NOT NULL && quantity_requirement>0  ";
	$result1=$conn->query($sql1);
	 if($result1->num_rows >0)
	   {
	       $row1=$result1->fetch_assoc();
	       
	   }
	
	
	
	
     class req 
	{

	
		public $qry;
		public $row;
	}
	$ob=new req();
	//$ob->con=mysqli_connect("localhost", "root", "", "i.m.p.") or die('connection errors');
	$ob->qry= "SELECT produce_id, produce, seller_rate, SUM(quantity_requirement) AS qr, sell, requirement_place, produce_image, seller_id ,seller_amount FROM produce_requirement WHERE quantity_requirement IS NOT NULL && quantity_requirement>0 GROUP BY produce_id, produce ";
 	   $result=$conn->query($ob->qry);
	  
         
   ?>
   
<!doctype html>
<html lang="en">
	<head>
		<?php require('design.php'); ?>
	</head>
	<body style="margin-top:2%">
		<div class="container-fluid">
		 <?php include('left1.php')  ?> 
			
				<hr>
			
		<h1 style="text-align:center;">  Produce Requirement </h1>
		<table class="table table-striped  table-hover">
			<tr>

						<th> S.N. </th>
							<th>  requirement      </th>
								<th> image         </th>
									<th> add </th>	
						<th> produce        </th>
						
						<th> seller rate</th>
					
					
						
							
						
								
								<th>  seller id      </th>
								
						
					
						<th> seller information        </th>
						
			</tr>
			<?php $a=0; 
			 if($result->num_rows >0) {
			while($ob->row=$result->fetch_assoc()) {  ?>
				<tr>
					  <form action="produce_requirment_accept.php"  method="post">
						<th> <?php   $a=$a+1; echo $a;?> </th>
							<th> requirement : <?php echo $ob->row['sell'];?> <input type="text" value=" <?php echo $ob->row['qr']; ?> "   name="requirement" required class="form-control"   > </th>
								<th>  <img src=" <?php echo $ob->row['produce_image']; ?> " width="100px" height="" class="img-thumbnail mx-auto d-block">     </th>
									<th><button type="submit" value="submit" name="submit" class="btn btn-sm btn-success">Add</button></th>
								
								
						<th>produce :  <?php  echo $ob->row['produce'];  ?> [<?php  echo $ob->row['produce_id'];  ?>] <input type="hidden" value=" <?php  echo $ob->row['produce'];  ?>  "  name="produce" required class="form-control"  readonly ></th>
							<th> seller rate : <?php echo $ob->row['seller_rate']; ?><input type="hidden" value=" <?php echo $ob->row['seller_rate']; ?>" name="seller_rate" required class="form-control"   >   </th>
							
							
								
							
								<th> seller id : <?php  echo $ob->row['seller_id'];   ?> <input type="hidden" value=" <?php  echo $ob->row['seller_id'];   ?> " name="seller_id" required class="form-control"   >     </th>
																<th><a href=""> <?php  echo $ob->row['seller_id'];   ?>   seller information     </a>    </th>
						
						<th> <input type="hidden" value="	<?php  echo $ob->row['produce_id'];  ?>	" name="id" required class="form-control"  readonly >	      </th>
					
				
						<th> <input type="hidden" value=" <?php echo $ob->row['sell'];?> "  name="sell" required class="form-control"   >    </th>
					
					
				
						
						
						

					</form>
				</tr>
			<?php   } } ?>
			
			            <tr>
			                <th colspan="8"> <h2> <?php echo"TOTAL AMOUNT : ".$row1['total'];?></h2></th>
			            </tr>
				</table>
			
		</div>	
	</body>
</html>
 