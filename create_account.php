<!doctype html>
<html lang="en">
    <head>
       <?php require('design.php'); ?>
    </head>
    <body style="margin-top:2%">
        <form action="create_account_access.php" method="post" enctype="multipart/form-data">
      <div class="container-fluid">
               <?php  require('logo.php'); ?>
               <br><hr>
                    <div class="row" >
                            <div class="col-sm-12">
                                   <h1 style="text-align:center;"><i><b>Create account</b></i></h1>
                                   <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                               <label for="name"> <b><i>Username : </i></b> </label><br>
                            </div>
                            <div class="col-sm-6 ">
                                <input type="text" id="name" name="name" required  placeholder="enter the username" maxlength="25" minlength="1" class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="password"> <b><i>Password : </i></b></label><br>
                            </div>
                            <div class="col-sm-6">
                                    <input type="password" name="password" id="password" required placeholder="enter the password" maxlength="12" minlength="6" class="form-control">
                                    <br>
                            </div> 
                            
                            
                            
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="mobile"> <b><i>Mobile : </i></b></label><br>
                            </div>
                            <div class="col-sm-6">
                                    <input type="number" name="mobile" id="mobile" required placeholder="enter your mobile number" maxlength="12" minlength="3" class="form-control">
                                    <br>
                            </div>
			    <div class="col-sm-6" style="text-align:right;">
			       <label for="business"><b><i> Business : </i></b>   </label></br>
			    </div>
			    <div class="col-sm-6">
				<select name="business" id="business" required class="form-control">
								<option value="clothe">clothe         </option>
								<option value="cosmetic">cosmetic         </option>
								<option value="electronics">electronic        </option>
								<option value="footwear">footwear         </option>
								<option value="gift"> gift        </option>
				</select>
				<br>
			   </div>
                           
                            <div class="col-sm-6" style="text-align:right;"> 
                                  <br>
                               <label for="date"> <b><i>birth :</i></b></label>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <input type="date" name="birth" class="form-control" placeholder="select your birth" id="date" required>
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                
                              <label for="image">  <b><i>Image upload :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="file" name="image" required class="form-control" id="image">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="village" ><b><i>Village :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="village" placeholder="enter your village" id="village" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="town" ><b><i>Town :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="town" placeholder="enter your town" id="town" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="district" ><b><i>District :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="district" placeholder="enter your district" id="district" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="state" ><b><i>State :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="state" placeholder="enter your state" id="state" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="country" > <b><i>Country :</i></b></label>
                            </div>
                            
                            <div class="col-sm-6">
                                <input list="a" name="country" id="country" class="form-control"placeholder="select your country" required>
                                <datalist id="a">
                                        <option value="India">
                                        <option value="Japan">
                                        <option value="Africa">
                                        <option value="America">
                                        <option value="Nepal">
                                </datalist>
                                <br>
                            </div> 
                            
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="pincode" ><b><i>Pincode :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" name="pincode" placeholder="enter your pincode" id="pincode" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="email" ><b><i>Email :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" placeholder="enter your email " id="email" maxlength="25" minlength="1" required class="form-control">
                                <br>
                            </div>
                            
                            <div class="col-sm-6" style="text-align:right;">
                                <label for="webside" ><b><i>Webside :</i></b></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="webside" placeholder="webside is optional" id="webside" class="form-control">
                                <br>
                            </div>
                          
                            <div class="col-sm-12">
                                <p class="text-center">
                                            <br>
                                            <button type="submit" value="submit" name="submit" class="btn-lg btn btn-primary">
                                                        Submit
                                            </button>
                                           
                                            <button type="reset" value="reset" name="reset" class="btn-lg btn btn-danger">
                                                    reset
                                            </button>
                                            <br>
                                    </p>   
                               
                            </div>
                            <div class="col col-*-* ">
                                <br>
                            </div>




                    
                    </div>
                </div>
                <div class="col col-3"></div>
            </div>
        </div>
        </form> 
    </body>
</html>