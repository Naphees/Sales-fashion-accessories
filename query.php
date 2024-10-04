<?php
  /*     class q
       {
           public $server="localhost";
            private $user="impprfrh_husen";
            protected $conn;
            protected $password="Husen_9997_bca";
             private $db="impprfrh_i.m.p.db";
             private $sql1;
             private $sql2;
             protected $result1;
             protected $result2;
             public $row1;
             public $row2;
             function __construct()
                {
                    $conn= new mysqli($this->server, $this->user, $this->password, $this->db) or die('connection errors');
                    if($conn->connect_error)
                      {
                          echo $conn->connect_error;
                      }
                      else
                      {
                          echo"<br>success<br>";
                          $test=570;
                          $this->sql1="SELECT * FROM `produce` WHERE `id` <=$test ";
                          $result=$conn->query($this->sql1);
                          if($result->num_rows >0)
                            {
                                    while($this->row1=$result->fetch_assoc())
                                      {
                                        echo"<br>".$this->row1['id']; 
                                        echo $this->row1['image'];
                                        unlink($this->row1['image']);
                                      }
                            }
                      } 
                   # echo"hellow constructor function";
                   $file="produce";
                  //  rmdir($file);
                }
       }

    $ob=new q();

<script>
    remove('produce');
</script>






echo"hellow";
$f="a";
if(mkdir($f))
 echo"file delete";
 
// echo readfile('query.php');
// echo fopen('query.php','w');
 $myfile = fopen("belt.php", "r") or die("Unable to open file!");
echo fread($myfile);
//fclose($myfile);
 
 
 
?>
<!DOCTYPE html>
<html>
<body>
dfkkkkkkkkkkkkkkkkkkkkkkkkkkkkkd,weeeeeeee<br><hr>this is good 

$myfile = fopen("bra.php", "r") or die("Unable to open file!");
echo fgets($myfile);
//fclose($myfile);


</body>
</html>  
<?php
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
} 
?>
<?php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}
?>
<?php
$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>
<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;

?>

<!DOCTYPE html>
<html>
<body>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);
?>

</body>
</html>

print"hellow:";
$rand=rand(1000, 9999) or die('errors');
echo $rand;
$sub="otp is";
$to="naphees9997@gmail.com";
if(mail($to,$sub,$rand))
  echo"success in otp"; 
  else
  print"fail in opt";
  phpinfo();
  */
  echo  "name";
?>
<form method="posT">
    name :<input type="text"  name="name" >
          <button type="submit" value="submit" name="submit">submit</button>
</form>
<?php
   $name=htmlspecialchars($_POST['name']);
   echo $name;
   mkdir('resume');
   if(mkdir ==TRUE)
     {
         echo"successfully ";
     }
?>
