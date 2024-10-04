<?php  require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Cosmetic</title>
    <?php require('design.php'); ?>
</head>
<body>
      <div class="container-fluid">
            <div class="row">
                
                 <div class="col-sm-12">
                        <?php require('link.php'); ?>
                 </div>
                <div class="col-sm-12">
                        <?php require('search.php') ?>
                </div>
                <div class="col col-12"><hr></div>
                
                <div class="col-sm-12">
                    <?php require('produce_available.php');  ?>
                    <div class="jumbotron">
                        <div class="row">

                           
                          <!-- start point of row -->
                          <div class="col-sm-4">
                                         <a href="swastic.php">
                                                        <img src="produce_categories_image/swastic_multi1.jpg"  alt="" width="400px" height="400px"  class="img-thumbnail mx-auto d-block">
                                              <p class="text-center">Swastic multi </p>
                                        </a>
                                         <br>
                                </div>
                               <!--
                                <div class="col-sm-4">
                                          <a href="mangalsutr.php">
                                                        <img src="" alt="" width="100%" height="100%">
                                                       <p class="text-center">Mangalsutr</p>


                                          </a>
                                          <br>
                                </div>
                                
                               
                                 <div class="col-sm-4">
                                          <a href="">
                                                        <img src="" alt="" width="100%" height="100%">
                                                   

                                          </a><br>
                                </div>
                                
                               
                                <div class="col-sm-4">
                                          <a href="">
                                                        <img src="" alt="" width="100%" height="100%">
                                                      

                                          </a><br>
                                </div>
                                <div class="col-sm-4">
                                          <a href="">
                                                        <img src="" alt="" width="100%" height="100%">
                                                       

                                          </a><br>
                                </div>
                                <div class="col-sm-4">
                                          <a href="">
                                                        <img src="" alt="" width="100%" height="100%">
                                                       

                                          </a>
                                          <br>
                                </div>
                               
                               end point of row -->
                        </div>
                    </div>
                </div>
            </div>
      </div>
</body>
</html>