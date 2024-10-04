<?php
	require('security.php');
		
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('design.php'); ?>
    </head>
    <body style="margin-top:2%">
       
            <div class="container-fluid">
                
                        <?php include('left1.php'); ?>
                       
                   <?php include('search1.php');?> 
                   <hr>
                    <form action="produce_add_access.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                           
                            <div class="col col-12 alert-success">
                                   
                            <b><i><h2 align="center"> Fill new  produce details</h2></i></b>
                           
                            </div>
                            <div class="col col-12"><br></div>
                            <div class="col-sm-4" align="right">
                                <label for="produce"><b><i>Produce :</i></b></label>
                                <br>
                            </div> 
                            <div class="col-sm-8">
                                <input type="text" name="produce"  required autofocus maxlength="80" minlength="1" id="produce" class="form-control" placeholder="enter the produce name">
                                <br>
                            </div>  
                            <div class="col-sm-4" align="right">
                                    <label for="quantity"><b><i> Quantity :</i></b> </label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" name="quantity" value="1" id="quantity" readonly class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-4" align="right">
                                <label for="price"><b><i>rate  :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="rate" class="form-control" required  autofocus placeholder="enter the price " id="price">
                                <br>
                            </div>
                            <div class="col-sm-12" align="center">
                                <label for="sell"><b><i>Sell  :</i></b> </label>
                               
                                <input type="radio" name="sell"  required  autofocus  id="sell" value="piece"> Per piece
                                <input type="radio" name="sell"  required  autofocus id="sell" value="dargan"> Per Dargan
                                 <input type="radio" name="sell"  required  autofocus  id="sell" value="set"> Per Set
                                <br>
                                <br>
                            </div>
				 <div class="col-sm-4" align="right">
                                <label for="width"><b><i>Produce width :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="width" class="form-control"   autofocus placeholder="enter produce width in inch or  0 " id="width">
                                <br>
                            </div>
				            <div class="col-sm-4" align="right">
                                <label for="height"><b><i>Produce height :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="height" class="form-control"   autofocus placeholder="enter produce height in inch or 0 " id="height">
                                <br>
                            </div>
				            <div class="col-sm-4" align="right">
                                <label for="weight"><b><i>Produce Weight :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="weight" class="form-control"   autofocus placeholder="enter produce weight in gram " id="weight">
                                <br>
                            </div>
                            <div class="col-sm-4" align="right">
                                <label for="image"><b><i>Produce Image :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" name="image" id="image" required class="form-control" autofocus >
                                <br>
                            </div>
                            <div class="col-sm-4" align="right">
                                <label for="minimam_sell"> <b><i>Minimam Sell quantity  :</i></b></label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" name="minimam_sell" required  id="minimam_sell" class="form-control" placeholder="enter the minimam quantity  " autofocus>
                               
                             
                                <br>
                            </div>
                            <div class="col-sm-4" align="right">
                                <label for="categories"><b><i>Categories :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                                <select name="categories" id="categories" required class="form-control" autofocus >
                                    <option value="beauty"> beauty  </option>
                                    <option value="jewellery">jewellery </option>
                                    <option value="Watch_belt_sunglasses_paras"> Watch belt sunglasses paras </option>
                                    <option value="clothe"> clothe </option>
                                    <option value="footwear">footwear</option>
                                    
                                    <option value="electronic">electronic </option>
                                    <option value="other"> other</option>
                                </select>
                                <br>
                            </div>
                            <div class="col-sm-4" align="right">
                                <label for="about"><b><i>About Produces :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <textarea name="about" id="about" cols="30" rows="3"  autofocus placeholder="enter some word about your produce" class="form-control"></textarea>
                                <br>
                            </div>
                                
                            
                            
                             <div class="col-sm-4" align="right">
                                <label for="session"><b><i>Session :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="session" id="session"   autofocus placeholder="which session produce use" class="form-control">
                                <br>
                            </div>    
                                
                             <div class="col-sm-4" align="right">
                                <label for="festival"><b><i>Festival :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="festival" id="festival"   autofocus placeholder="Which festival produce use" class="form-control">
                                <br>
                            </div>    
                                
                            <div class="col-sm-4" align="right">
                                <label for="religion"><b><i>Religion :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="religion" id="religion"   autofocus placeholder="which religion produce use" class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="profit"><b><i>Profit :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="profit" id="profit" required  autofocus placeholder="enter produce profit" class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="spend"><b><i>Spend :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="spend" id="spend"   autofocus placeholder="enter produce spend" required class="form-control">
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
                               
                                    <input type="text" name="seller_id" id="seller_id"   autofocus placeholder="enter seller id"  class="form-control">
                                <br>
                            </div> 
                            
                            
                            <div class="col-sm-4" align="right">
                                <label for="seller_rate"><b><i>Seller Rate :</i></b> </label>
                                <br>
                            </div>
                            
                            
                            
                            <div class="col-sm-8">
                               
                                    <input type="text" name="seller_rate" id="seller_rate"   autofocus placeholder="enter seller rate"  class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="seller_quantity"><b><i>Seller Quantity :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="number" name="seller_quantity" id="seller_quantity"   autofocus placeholder="enter seller quantity" class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-4" align="right">
                                <label for="minimam_purchase"><b><i>Minimam Purchase :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="minimam_purchase" id="minimam_purchase"   autofocus placeholder="enter seller minimam purchase" class="form-control">
                                <br>
                            </div>    
                            <div class="col-sm-4" align="right">
                                <label for="quantity_available"><b><i>Quantity Available :</i></b> </label>
                                <br>
                            </div>
                            <div class="col-sm-8">
                               
                                    <input type="text" name="quantity_available" id="quantity_available"   autofocus placeholder="enter quantity available"  class="form-control">
                                <br>
                            </div>    
                            
                            <div class="col-sm-12" align="center">
                                <label for="seller_sell"><b><i>Seller Sell :</i></b> </label>
                               
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
                                <button type="submit" value="submit" name="submit"class="btn btn-lg btn-success" >    
                                    <b><i>Submit</i></b>
                                  </button>
                           
                                <button type="reset" value="reset" name="reset" class=" btn-danger btn btn-lg">
                                        <b><i>Reset</i></b>
                                </button>
                                </p>
                            </div>
                            <div class="col col-2"> </div>
                            <div class="col col-12"><br></div>
                        </div>
                   
                </form>
            </div>
    </body>
</html>
