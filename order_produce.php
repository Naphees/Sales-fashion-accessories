<?php
   class order_produce
     {
	public $con;
	public $qry;
	public $row;
	Public $id;
     }
   $ob=new order_produce();
 $ob->id=$_REQUEST['id'];
 $ob->con=mysqli_connect("localhost", "root", "" ,"i.m.p.") or die('connection error');
 $ob->qry=mysqli_query($ob->con, "SELECT * FROM `sell` WHERE `order_number`= '".$ob->id."'       ") or die('select error');
 $ob->row=mysqli_fetch_assoc($ob->qry);

?>
<!DOCTYPE html>
  <head>
     <link rel="stylesheet" href="css/bootstrap.css" />
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.js"></script>
     <script src="js/jquery-3.6.0.min.js"></script>
  </head>
  <body>
	<div class="container-fluid">
		<div clas="row">
		   <div class="col col-12">
			<div class="well-lg"> Order Detail</div>
		    </div>
		   <div class="col col-2">

		    </div>
		   <div class="col col-10">
			<table class="table table-striped table-hover table-bordered">
			  <tr>
				<th colspan="6"> Order Detail</th>
			  </tr>
			  <tr>
				<th colspan="3"> order number : <?php echo $ob->row['order_number'];?>  </th>
				<th colspan="3"> time : <?php echo $ob->row['time'];?> </th>
	
			  </tr>
			  <tr>
				<th colspan="3">customer id : <?php echo $ob->row['customer_id'];?> </th>
				<th colspan="3">date : <?php echo $ob->row['date'];?> </th>
			  </tr>
                       </table>
			<br>
		       <table class="table table-striped table-hover table-bordered">
			   <tr>
				<th> S.N.</th> 
				<th>produce</th>
				<th>produce id</th>
				<th>rate</th>
				<th>quantity</th>
				<th>amount</th>
			   </tr>
			   <?php
				while($ob->row=mysqli_fetch_assoc($ob->qry)) {
			
			   ?>
                             <tr>
								<td> <?php echo $ob->row['id']; ?>      </td>
								<td> <?php echo $ob->row['produce']; ?>      </td>
								<td> <?php echo $ob->row['produce_id']; ?>      </td>
								<td> <?php echo $ob->row['rate']; ?>      </td>
								<td> <?php echo $ob->row['quantity']; ?>      </td>
								<td> <?php echo $ob->row['amount']; ?>      </td>
			     </tr>
			   <?php } ?>
			</table>
		   </div>
		</div>

        </div>
  </body>
</html>