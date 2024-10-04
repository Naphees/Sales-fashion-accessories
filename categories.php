<?php
  require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php  require('design.php'); ?>
		<title>
			produce categories 
		</title>
		<script>
		    $(document).ready(function()
		    {
		      $("#beauty").mouseenter(function(){
                         $("#beauty1").show(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		       $("#jewel").mouseenter(function(){
		           $("#beauty1").hide(1500);
		          $("#jewel1").show(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		      }) ; 
		      
		       $("#cloth").mouseenter(function(){
		           $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").show(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		      
		        $("#belt").mouseenter(function(){
                         $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").show(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		      
		      
		        $("#paras").mouseenter(function(){
		           $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").show(1500);
		         
		      }) ; 
		      
		        $("#sungl").mouseenter(function(){
		            $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").show(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		      
		       $("#watch").mouseenter(function(){
		            $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").show(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		      
		      
		    }
		        );
		</script>
	</head>
	<body style="margin-top:2%">
<div class="container-fluid">

   
			<?php require('link.php');
			require('option.php');
			?>
 
		
			 
			<hr>
		<!--	<table class="table table-hover table-responsive"width="100%">
           <tr>
               <th id="beauty">Beauty</th>
                <th id="jewel">Jewellery</th>
                 <th id="cloth">Clothe</th>
                  <th id="belt">Belt</th>
                   <th id="paras">paras</th>
                   <th id="sungl">Sunglasses</th>
                    <th id="watch">Watch</th>
           </tr>
       </table>
   <div class="bg-ifco"  style="display:none" id="beauty1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `categories`= 'cosmetic' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	                    
	                     <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	  <div class="bg-ifco"  style="display:none" id="jewel1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `categories`= 'jewellery' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	                <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	 <div class="bg-ifco"  style="display:none" id="cloth1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `categories`= 'clothe' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	               <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	 <div class="bg-ifco"  style="display:none" id="belt1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `produce` lIKE '%Belt%' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	                 <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	 <div class="bg-ifco"  style="display:none" id="paras1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `produce` LIKE '%paras%' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	                 <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	 
	 <div class="bg-ifco"  style="display:none" id="sungl1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `produce` LIKE '%sunglass%' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	                <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	 
	 	 <div class="bg-ifco"  style="display:none" id="watch1">
       
	<div class="row">
	    
	          <?php
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `produce` LIKE '%watch%' ";
	               $result=$conn->query($sql);
	               if($result->num_rows >0)
	                    {
	                        while($row=$result->fetch_assoc())
	                        {
	               ?>
	                <div class="col-4">
	              <form action="produce_frame.php" method="post">
                         <input type="hidden" name="search" value="<?php echo $row['produce'] ?>" required>
                         <button name="submit" name="submit" value="submit"class="btn">
	                    
	                    
	                    
	                    
	                    
	                    
	               <?php
	                           echo $row['produce'];
	               ?>
	                    </button>
	                    </form>
	                 </div>
	                       <?php  }
	                    }
	          ?>
	       
	    </div>
	 </div>
	    
	    
	    
	    -->
	    
	    <div class="jumbotron">
       
	<div class="row">
	         <div class="col-sm-12">
	           <h2> <p class="text-center"><b><i>Produce categories</i></b></p></h2> 
	         </div>
			<div class="col-sm-4" >
					<a href="beauty.php"><img src="produce_categories/41P09H+x51L._AC_UL320_.jpg"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Beauty</i></b></p></h4>	</a>
    	    </div>
    	        <div class="col-sm-4" >
					<a href="jewellery.php"><img src="produce_categories/tuta_dil_chain2.webp"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Jewellery</i></b></p></h4>	</a>
    	         </div>
    	    	<div class="col-sm-4" >
					<a href="clothe.php"><img src="produce_categories/bra3.webp"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Clothe</i></b></p></h4>	</a>
    	    </div>
    	    	<div class="col-sm-4" >
					<a href="Watch_belt_sunglasses_paras.php"><img src="produce_categories/314kGh7sh1L._AC_UL320_.jpg"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Belt, paras, & sunglasses , watch </i></b></p></h4>	</a>
    	    </div>
    	    
    	    

    	    <!--
    	    
    	    	<div class="col-sm-4" >
					<a href="toys.php"><img src="produce_categories_image/toys.webp"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Toys</i></b></p></h4>	</a>
    	    </div>
    	    	<div class="col-sm-4" >
					<a href="gifts.php"><img src="produce_categories_image/gift.jpg"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Gifts</i></b></p></h4>	</a>
    	    </div>
    	    	<div class="col-sm-4" >
					<a href="daily_use.php"><img src="produce_categories_image/91TBn4DbTXL._AC_UL320_.jpg"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Daily use</i></b></p></h4>	</a>
    	    </div>
    	    	<div class="col-sm-4" >
					<a href="pots.php"><img src="produce_categories_image/bottle.jpg"  alt="sorry, this is not avialable"  width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
					<h4><p class="text-center"><b><i>Pots</i></b></p></h4>	</a>
    	    </div>
		    <div class="col-sm-4">
			<a href="food.php"><img src="" width="" height="" alt="" >
			<h4><p class="text-center"><b><i>food</i></b></p></h4>	</a>
    		 </div>
			<div class="col-sm-4">
							<a href="readyment_clothe.php"><img src="" width="" height="" alt="">
			                	<h4><p class="text-center"><b><i>readyment clothe</i></b></p></h4>	</a>
    			 </div>
			<div class="col-sm-4" >
			    			<a href="footwear.php"><img src="" width="" height="" alt="">
			                 	<h4><p class="text-center"><b><i>footwear</i></b></p></h4>	</a>
     			</div>
				<div class="col-sm-4" >
			    			<a href="sports.php"><img src="" width="" height="" alt="">
				                 	<h4><p class="text-center"><b><i>sports</i></b></p></h4>	</a>
     				</div>
						<div class="col-sm-4" >
						<a href="farnichar.php"><img src="" width="" height="" alt="">
						 	<h4><p class="text-center"><b><i>farnichar</i></b></p></h4>	</a>
    		 				</div>
			<div class="col-sm-4">
							<a href="toys.php"><img src="" width="" height="" alt="">
				 	<h4><p class="text-center"><b><i>toys</i></b></p></h4>	</a>
    			 </div>
			<div class="col-sm-4" >
			    			<a href=""><img src="gm_food_supplement.php" width="" height="" alt="">
			
				 	<h4><p class="text-center"><b><i>GM Food & Supplement</i> </b></p></h4>	</a>
     			</div>
				<div class="col-sm-4">
			    			<a href="dryfruits.php"><img src="" width="" height="" alt="">
				
						<h4><p class="text-center"><b><i> dryfruits </i> </b></p></h4>	</a>
     				</div>   
				
					 											
			<div class="col-sm-4">
							<a href="domestic_pots.php"><img src="" width="" height="" alt="">
					
								<h4><p class="text-center"><b><i> domestic pots </i> </b></p></h4>	</a>
    			 </div>
			<div class="col-sm-4" >
			    			<a href="electronic.php"><img src="" width="" height="" alt="">
			                    	<h4><p class="text-center"><b><i> electronic </i> </b></p></h4>	</a>
     			</div>
				<div class="col-sm-4">
			    			<a href="mobile.php"><img src="" width="" height="" alt="">
				        	<h4><p class="text-center"><b><i> mobile </i> </b></p></h4>	</a>
     				</div>
				<div class="col-sm-4">
					<a href="vicle.php"><img src="" width="" height="" alt="">
					<h4><p class="text-center"><b><i> vicle </i> </b></p></h4>	</a>
    					 </div>
			<div class="col-sm-4">
							<a href="spices.php"><img src="" width="" height="" alt="">
								<h4><p class="text-center"><b><i> spices </i> </b></p></h4>	</a>
    			 </div>
			<div class="col-sm-4">
			    			<a href="kirana.php"><img src="" width="" height="" alt="">
							<h4><p class="text-center"><b><i> kirana </i> </b></p></h4>	</a>
     			</div>
				<div class="col-sm-4">
			    			<a href="study.php"><img src="" width="" height="" alt="">
							<h4><p class="text-center"><b><i> study</i> </b></p></h4>	</a>
     				</div>
				<div class="col-sm-4">
					<a href="clothe.php"><img src="" width="" height="" alt="">
				        	<h4><p class="text-center"><b><i> clothe </i> </b></p></h4>	</a>
    				 </div>
			<div class"col-sm-4">
							<a href="moti.php"><img src="" width="" height="" alt="">
							<h4><p class="text-center"><b><i> moti </i> </b></p></h4>	</a>
    			 </div>
			<div class="col-sm-4">
			    			<a href="romaterial.php"><img src="" width="" height="" alt="">
						<h4><p class="text-center"><b><i>romaterial </i> </b></p></h4>	</a>
     			</div>
			<div class="col-sm-4">
			    			<a href=""><img src="" width="" height="" alt="">	
					        	<h4><p class="text-center"><b><i>    </i> </b></p></h4>	</a>
     		</div>
     		-->

         </div>
      </div>
    
</div>
</body>
</html>
 