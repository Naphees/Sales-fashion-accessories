<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require('design.php'); ?>
</head>

<body style="margin-top:6%">
  
    <div class="container">
        <div class="jumbotron">
  <h1><B><i>imppro.in</i></B></h1>

  <form action="main_access.php" class="was-validated" method="post">
    <div class="form-group">
      
      <input type="text" class="form-control" placeholder="Enter username" name="employee" required value="naphees"  maxlength="50" minlength="1" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control" placeholder="Enter password" name="password" required value="naphees9997"  maxlength="50" minlength="1" >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    <button type="reset" class="btn btn-danger" value="reset">Reset</button>
    <br><br>
    <pre><a href="">forget password</a> <a href=""> create account</a></pre>
      
  </form>
  </div>
</div>
</body>
</html> 