 <?php
    session_start();
class index
  {
     public $conn;
     public $sql;
     public $result;
     public $row;
      
  }
  $ob=new index();
 $name=htmlspecialchars($_POST['name']);
                    $password=htmlspecialchars($_POST['password']);
 
  $ob->conn=new mysqli("localhost", "impprfrh_husen", "Husen_9997_bca", "impprfrh_i.m.p.db") or die('connection errors');
                    $ob->sql= " SELECT * FROM customer WHERE `name` ='".$name."' AND  `password`='".$password."' AND `join` IS NOT NULL ";
                    $ob->result=$ob->conn->query($ob->sql);
                  if($ob->result->num_rows>0) 
                        {
                             $ob->row=$ob->result->fetch_assoc() or die('fetch errors') ;
                             $_SESSION['name']=$ob->row['name'];
                             $id=$ob->row['id'];
                             $_SESSION['id']=$id;
                            
                            
                               echo"<script>location.replace('dashboard.php');</script>";
                        }
                         else
                            {
                                
                                echo"<script>location.replace('index.php');</script>";
                            }
  ?>