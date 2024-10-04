
        <nav class="navbar navbar-expand-sm  navbar-dark">
  <form class="form-inline" action="produce_frame.php" method="post"autocomplete="on">
    <div class="input-group">
      <div class="input-group-prepend">
        
      </div>
      <input type="search" name="search"  class="form-control" placeholder="search here"  maxlength="50" minlength="1" required class="form-control" value="" >
       <span class="input-group-text">Search</span>
       <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'];  ?>">
    </div>
  </form>
</nav> 

 
  
 

