<?php
	include('security.php');
	
    class produce_update 
        {
            private $id;
       
            public  $sql;
            public $row;
            public $result;
            function husen()
                {
                    $this->id=$_REQUEST['id'] or die('id errors');
                  
                    $this->sql="SELECT * FROM produce WHERE id='".$this->id."'  ";
                   
                }
        }
    $ob=new produce_update();
    $ob->husen();
    $ob->result=$conn->query($ob->sql);
    if($ob->result->num_rows>0)
        {
                 $ob->row=$ob->result->fetch_assoc() or die('fetch errors');
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  require('design.php');  ?>
    </head>
    <body style="margin-top:2%">
	<div class="container-fluid">
	  
                    <?php  include('left1.php'); ?>

                    <hr>
	
        <form action="produce_update_access.php" method="post">
          
                <div class="row">
                   
                   
                  
                              <div class="col col-12">
                                 <h2 align="center" class="alert-danger"> <b><i> Update produce detail </i></b></h2>
                              </div>
                            <div class="col col-12" >
                                <input type="hidden" name="id" value="<?php echo $ob->row['id'];?>" >
                                <input type="hidden" name="image" value="<?php echo $ob->row['image']; ?>">
                            </div>
                            <div class="col col-4" style="text-align:right">
                                <br>
                                <label for="produce"><b><i>Produce :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                <br>
                                <input type="text" value="<?php echo $ob->row['produce'];?>" name="produce" autofocus required class="form-control" id="produce" maxlength="20" minlength="1">
                                <br>
                            </div>
                          
                            <div class="col col-4" style="text-align:right">
                                
                                <label for="quantity"><b><i>Quantity :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                
                                <input type="number" name="quantity" value="<?php echo $ob->row['quantity'];?>" required class="form-control" maxlength="20" minlength="1" id="quantity" >
                                <br>
                            </div>
                            <div class="col col-4" style="text-align:right">
                                
                                <label for="price"><b><i>Rate :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="number" name="rate" value="<?php echo $ob->row['rate'];?>" required class="form-control" maxlength="20" minlength="1" id="price">
                                <br>
                            </div>
                            <div class="col col-4" style="text-align:right">
                                
                                <label for="sell"><b><i>sell :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="text" readonly value="<?php echo $ob->row['sell'];?>">
                                <br>
                                <input type="radio" name="sell" value="piece"  required  id="sell"> Per piece 
                                <input type="radio" name="sell" value="dargan" required id="sell">Per dargan
                                  <input type="radio" name="sell"  required  autofocus  id="sell" value="set"> Per Set
                                <br>
                            </div>
				
				            <div class="col col-4" style="text-align:right">
                                
                                <label for="width"><b><i>Width :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="number" name="width" value="<?php echo $ob->row['width'];?> in  inchs"  class="form-control" maxlength="20" minlength="1" id="width">
                                <br>
                            </div>
				            <div class="col col-4" style="text-align:right">
                                
                                <label for="height"><b><i>Height :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="number" name="height" value="<?php echo $ob->row['height'];?> in inchs"  class="form-control" maxlength="20" minlength="1" id="height">
                                <br>
                            </div>
			   
                             <div class="col col-4" style="text-align:right">
                                
                                <label for="weight"><b><i>Weight :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="number" name="weight" value="<?php echo $ob->row['weight'];?> in grams"  class="form-control" maxlength="20" minlength="1" id="weight">
                                <br>
                            </div>
				            <div class="col col-4" style="text-align:right">
                                
                                <label for="minimam_sell"><b><i>Minimam Quantity :</i></b></label>
                                <br>
                            </div>
                            <div class="col col-8">
                                 
                                <input type="number" name="minimam_sell" value="<?php echo $ob->row['minimam_sell'];?>" required class="form-control" maxlength="20" minlength="1" id="minimam_sell">
                                <br>
                            </div>
                              <div class="col-sm-4" align="right">
                                <label for="profit"><b><i>Profit :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="profit" id="profit" value="<?php echo $ob->row['profit'];?>" required  autofocus placeholder="enter produce profit" class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="spend"><b><i>Spend :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="spend" id="spend" value="<?php echo $ob->row['spend'];?>"  autofocus placeholder="enter produce spend" required class="form-control">
                                <br>
                            </div>
                            
                             <div class="col-sm-12" align="center">
                                <hr><br><h2>Seller information</h2><br>
                            </div>
                            
                             <div class="col-sm-4" align="right">
                                <label for="seller_id"><b><i>Seller id :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="seller_id" id="seller_id" value="<?php echo $ob->row['seller_id'];?>"  autofocus placeholder="enter seller id"  class="form-control">
                                <br>
                            </div> 
                            
                            
                            <div class="col-sm-4" align="right">
                                <label for="seller_rate"><b><i>Seller Rate :</i></b> </label>
                                <br>
                            </div>
                            
                            
                            
                            <div class="col-sm-8">
                               
                                    <input type="text" name="seller_rate" id="seller_rate" value="<?php echo $ob->row['seller_rate'];?>"   autofocus placeholder="enter seller rate"  class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="seller_quantity"><b><i>Seller Quantity :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="number" name="seller_quantity" id="seller_quantity" value="<?php echo $ob->row['seller_quantity'];?>"  autofocus placeholder="enter seller quantity" class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="minimam_purchase"><b><i>Minimam Purchase :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="minimam_purchase" id="minimam_purchase" value="<?php echo $ob->row['minimam_purchase'];?>"   class="form-control">
                                <br>
                            </div>    
                            <div class="col-sm-4" align="right">
                                <label for="quantity_available"><b><i>Quantity Available :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="quantity_available" id="quantity_available" value="<?php echo $ob->row['quantity_available'];?>"  autofocus   class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-12" align="center">
                                <label for="seller_sell"><b><i>Seller Sell :</i></b> </label>
                                 
                                <input type="text" readonly value="<?php echo $ob->row['seller_sell'];?>">
                                <br>
                                <input type="radio" name="seller_sell"    autofocus  id="seller_sell" value="piece"> Per piece
                                <input type="radio" name="seller_sell"   autofocus id="seller_sell" value="dargan"> Per Dargan
                                 <input type="radio" name="seller_sell"   autofocus id="seller_sell" value="set"> Per Set
                                <br>
                                <br>
                            </div>
                                     
                                
                                
                                
                                

                            <div class="col-sm-12">
                                <br>
                                <br>
                                <hr>
                                <hr><br>
                            </div>
                           
                            
                            
                            
                            
                            <div class="col col-12">
                                <p class="text-center">
                                <button type="submit" value="submit" name="submit" class="btn btn-lg btn-success">
                                    <b><i>Submit</i></b>
                                </button>
                               
                         
                                
                                <button type="reset" value="reset" name="reset" class="btn btn-danger btn-lg">
                                        <b><i>Reset</i></b>
                                </button>
                                </p>
                            </div>
                           
                            
                        </div>
                    
             </form>
        </div>
    </body>
</html>