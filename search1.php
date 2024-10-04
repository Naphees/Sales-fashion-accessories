<?php  /*
          <form action="search1_access.php" method="post">
          <div class="row">                           
                <div class="col col-6"></div>
                <div class="col col-5">
                    
                        <input type="search" name="search"  maxlength="50" minlength="1" required class="form-control  " placeholder=" search here" >
                        <input type="hidden" name="employee_id" value="<?php echo $_SESSION['id1'];  ?>">
                    </div>
                <div class="col col-1">
                    
                    <button type="submit" name="submit" value="submit" class="form-control btn-primary">
                        <b><i>Search</i></b>
                    </button>
                    
                </div>
           </div>
</form>
 */
 ?>






  <nav class="navbar navbar-expand-sm  navbar-dark">
  <form class="form-inline" action="" method="post">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">@</span>
      </div>
                 <input type="search" name="search"  maxlength="50" minlength="1" required class="form-control  " placeholder=" search here" >
                        <input type="hidden" name="employee_id" value="<?php echo $_SESSION['id1'];  ?>">
    </div>
  </form>
</nav> 