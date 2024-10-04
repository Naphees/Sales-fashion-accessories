<?php
require('security.php');
 class order 
    {
	public $sql;
	public $row;
	public $result;
	 
	}	
 
   $ob=new order();
   $ob->sql="SELECT * FROM  produce_order WHERE  order_complete IS NULL";
  
     
   $result=$conn->query($ob->sql);

 	 

?>
<!doctype html>
<html lang="en">
	<head>
		<?php require('design.php'); ?>
	</head>
<body>

<div class="container-fluid">

				<?php include('left1.php'); ?> 
	
			<?php require('search1.php'); ?>	
			<hr>
		
		        	<table class="table table-hover  table-striped">
		   <tr>
		       <th  colspan="7"></th>	<h2> <b><i><p class="text-center">All current order </p>  </i></b> </h2>   </th>
		   </tr>
	<tr>
	   <th>
		<b><i> S.N. </i></b>
	  </th>
		 <th>
		<b><i>Order Number  </i></b>
	  </th>
	 <th>
		<b><i>Amount  </i></b>
	  </th>
	 <th>
		<b><i>Payment Mode  </i></b>
	  </th>
	 <th>
		<b><i> mobile </i></b>
	  </th>
	 <th>
		<b><i> Deliver Adress </i></b>
	  </th>
	 <th>
		<b><i>Produce list  </i></b>
	  </th>
    </tr>
    <?php
	   $a=0;
			 while( $ob->row =$result->fetch_assoc())
			 {
			 
	 ?>
   	<tr>	
	   <td>
		<b><i> <?php $a=$a+1;
				 echo  $a ?> </i></b>
	  </td>
		 <td>
		<b><i><?php  echo $ob->row['id']; ?> </i></b>
	  </td>
	 <td>
		<b><i><?php  echo $ob->row['amount']; ?>   </i></b>
	  </td>
	 <td>
		<b><i><?php  echo $ob->row['payment_mode']; ?>   </i></b>
	  </td>
	 <td>
		<b><i> <?php  echo $ob->row['mobile']; ?>  </i></b>
	  </td>
	 <td>
		<b><i><?php echo $ob->row['village']." ,".$ob->row['town'].",". $ob->row['district'].",".$ob->row['state'].",".$ob->row['country'].", pincode".$ob->row['pincode'];     ?> 	</i></b>
	  </td>
	 <td>
		<b><i><a href="order_current_produce1.php?id=<?php echo $ob->row['id'];  ?>">     Produce list  </a>  </i></b>
	  </td>
      </tr>

  <?php   } ?>

  </table>
		
</div>
             </body>
             </html>
