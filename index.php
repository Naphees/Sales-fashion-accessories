<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>wholeselling marketing plateform</title>
     <link rel="icon" type="image/x-icon" href="https://imppro.in/logo/favicon (2).ico">
       <link rel="icon" type="image/x-icon" href="logo/favicon (2).ico">
         <link rel="icon" type="image/x-icon" href="imppro.in/logo/favicon (2).ico">
    <meta name="description" content="cosmetic wholeselling plateform. you can easily purchase and sell ">
<meta name="keywords" content="wholesell cosmetic  , wholesell produce, beauty business, shoues wholesell">
   <?php require('design.php'); ?>
  
</head>

<body style="margin-top:6%">
   
    <div class="container">
        <div class="jumbotron">
            
            <h1><b><i> imppro.in</i></b></h1>
            <h6><i>produce wholeselling plateform</i></h6>
            <br>
        

                
  
  <form action="index_access.php" class="was-validated" method="post">
    <div class="form-group">
      
      <input type="text" class="form-control" placeholder="Enter username" name="name" required  maxlength="50" minlength="1" value="naphees">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" placeholder="Enter password" name="password" required  maxlength="50" minlength="1" VALUE="$Husen_bca" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    <button type="reset" class="btn btn-danger" value="reset">Reset</button>
    <br><br>
    <pre> <a href="forget_password.php">forget password</a> <a href="create_account.php"> create account</a> </pre>
      
  </form>
  </div>
</div>



<br>
 
</body>
</html> 
  