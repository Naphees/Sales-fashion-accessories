

 <?php
    session_start();
            class naphees 
                {
                            public $conn;
                            public $sql;
                            public $row;
                            public $result;
                }
                $ob =new naphees();
     
               echo  $employee= htmlspecialchars($_POST['employee']);
                echo "<br>". $password= htmlspecialchars($_POST['password']);
                   
                   // $con=new mysqli("localhost", "root", "", "i.m.p.") or die('connection errors');
                     $ob->conn=new mysqli("localhost", "impprfrh_husen", "Husen_9997_bca", "impprfrh_i.m.p.db") or die('connection errors');
                    $sql= " SELECT * FROM photo_uploader WHERE name ='".$employee."' AND  password='".$password."'  ";
                    $result=$ob->conn->query($sql);
                    if($result->num_rows>0)
                         {
                            echo"success";
                            $row=$result->fetch_assoc();
                             echo"<br>". $row['name'];
                             echo"<br>". $row['password']; 
                             $_SESSION['id2']=$row['id'];
                             echo"<br>". $_SESSION['id2'];
                             echo"<script> location.replace('photo_upload.php'); </script>";
                         }
                    else
                          {
                           
                            echo"<script>alert(' enter the correct password ');</script>";
                            echo"<script> location.replace('photo_main.php');   </script>";
                          
                          }
           
?>