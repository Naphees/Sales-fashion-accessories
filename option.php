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
		      
		        $("#produce").mouseenter(function(){
		            $("#beauty1").hide(1500);
		          $("#jewel1").hide(1500);
		          $("#cloth1").hide(1500);
		          $("#belt1").hide(1500);
		          $("#sungl1").hide(1500);
		          $("#watch1").hide(1500)
		          $("#paras1").hide(1500);
		         
		      }) ; 
		      
		      
		    }
		        );
		</script>
	
 
		
			 
		
			<table class="table table-hover table-responsive"width="100%">
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
	              $sql="SELECT DISTINCT `produce`,`id` FROM `produce` WHERE `categories`= 'beauty' ";
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
		   