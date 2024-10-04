
 <?php
                                         function na()
                                         {
                                            $date=date("d-m-y");
                                            #echo $date."<br>";
                                            $con=mysqli_connect("localhost","root","","i.m.p.") or die('errors');
                                            $qry=mysqli_query($con , "SELECT amount FROM order_temprery WHERE date='".$date ."'  ") or die('select');
                                            $_SESSION['price']=0;
                                            $_SESSION['amount']=0;
                                            while($a=mysqli_fetch_assoc($qry))
                                            {
                                               
                                                $_SESSION['amounts']= $_SESSION['amount']+$a['amount'];
                                                
                                                 $_SESSION['price']=$_SESSION['price']+$_SESSION['amounts'];
                                                    
                                                }
                                                echo $_SESSION['price'];
                                               
                                         }     
                                        
                                            
                                        
                                        ?>
<!doctype html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script>

    </head>
    <body>
    
        <div class="container-fluids"> <div class="row">
            <div class="col col-12">
                <?php require('header.php'); ?>
            </div></div>
        </div>
        <form action="complete_order.php" method="post">
         <div class="container-fluids">
          <div class="row">
            <div class="col col-12">
                <h1 align="center">money pay page</h1>
            </div>
            <div class="col col-2" style="border:1px solid black;">
                <?php include('left.php');?>
            </div>
            <div class="col col-10" style="border:1px solid black;">
                <div class="row" style="margin-top:200px;">
                    <div class="col col-3"></div>
                    <div class="col col-6 alert-warning" style="border:1px solid gray" align="center">
                            <br><br><br>
                            <div class="row">
                 
                                <div class="col col-3">       
                                online pay
                                </div>
                                <div class="col col-9">    
                                      <input type="text" name="online_pay" class="form-control" value="<?php na();?>" readonly    required >
                                </div>
                                <div class="col col-4"></div>
                                <div class="col col-4">
                                    <br>
                                    <button type="submit" value="submit" name="submit" class="btn btn-sm btn-success form-control">
                                        <b><i>Pay</i></b>
                                    </button>
                                    
                                </div>
                              
                            </div>
                            <br><br><br>   
                    </div>
                    <div class="col col-3"></div>
                </div>
                    
                
            </div>

        </div></div>
        </form>  
    </body>

</html>