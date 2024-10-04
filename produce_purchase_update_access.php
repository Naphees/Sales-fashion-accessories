<?php
	include('connection.php');
    $quantity=htmlspecialchars($_POST['quantity']);
     $id=htmlspecialchars($_POST['id']);
      $produce_id=htmlspecialchars($_POST['produce_id']);
       $rate=htmlspecialchars($_POST['rate']);
       $amount=(int)$rate*(int)$quantity;
        $spend=htmlspecialchars($_POST['spend']);
        $spend=(int)$spend*(int)$quantity;
         $profit=htmlspecialchars($_POST['profit']);
         $profit=(int)$profit*(int)$quantity;
         $seller_rate=htmlspecialchars($_POST['seller_rate']);
         $seller_amount=(int)$seller_rate*(int)$quantity;
        $sql="UPDATE sell SET rate='".$rate."' , quantity='".$quantity."' , amount='".$amount."', spend='".$spend."' , profit='".$profit."', seller_rate='".$seller_rate."' , seller_amount='".$seller_amount."' WHERE id='".$id."'  ";
            if($conn->query($sql)==TRUE)
                    {
                        echo"<script>alert('Successfully , upadate quantity');</script>";
                        echo"<script>location.replace('final_bill.php');</script>";
                    }
            else
              {
                   echo"<script>alert('Fail , upadate quantity');</script>";
                        echo"<script>location.replace('final_bill.php');</script>";
              }

?>



