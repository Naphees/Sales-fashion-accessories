<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo	$_FILES['image']['type'];
        $type="image/jpeg";
        if($_FILES['image']['type']==$type)
            {
                $target_path="produce/";  // 8
                $target_path=htmlspecialchars( $target_path.basename( ($_FILES['image']['name'])));
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))
                    {
                        echo"success";
                        $server="localhost";
                        $user="impprfrh_husen";
                        $password="Husen_9997_bca";
                        $db="impprfrh_i.m.p.db";
                        $conn= new mysqli($server,$user,$password,$db)or die('connection erorrs');
                        if($conn->connect_error)
                          {
                            die("connection fail".$conn->connect_error);
                          }
                         else
                          {
                           $sql="INSERT INTO `produce`(`image`)VALUE('".$target_path."')";
                           if($conn->query($sql)==TRUE)
                                    {
                                       
                                         echo"<script>alert('successfully upload produce'); </script>";
                                             echo"<script>location.replace('photo_upload.php');  </script>     ";
                                    } 
                            else
                               {
                                echo"<script>alert('Fail to upload produce'); </script>";
                        echo"<script>location.replace('photo_upload.php');  </script>     ";
                               }




                          }
                    }
                    else
                    {
                       echo"<script>alert('sorry, this produce no add');</script>";
                       echo"<script>location.replace('photo_upload.php');</script>"; 
                      
                    }
            }
        else
          {
                     echo"<script>alert('produce image with(.jpg extention) allow'); </script>";
                        echo"<script>location.replace('photo_upload.php');  </script>     ";
          }
	?>