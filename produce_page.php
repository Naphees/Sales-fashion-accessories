<?php
    require('security.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('design.php');  ?>
   

</head>
<body>
    <div class="container-fluid">
<table class="table table-hover table-striped table-bordered">   
                                    <tr><th colspan="3"> <h1>User searched</h1> </th></tr>     
                                    <tr><th>S.N.</th><th>Search</th><th>Block</th></tr>
                                        
                                        <?php
                                                $search="SELECT * FROM `search` WHERE  `add` IS NULL AND `block` IS NULL ";
                                                $result=$conn->query($search);
                                                if($result->num_rows >0)
                                                        {
                                                            $a=0;
                                                          while( $row=$result->fetch_assoc())
                                                                    {
                                                    
                                                                        
                                        ?>
                                            <tr>
                                                <td>
                                                      <?php $a=$a+1; echo $a;    ?>                                                     
                                                </td>
                                                <td>
                                                        <?php echo $row['search'];  ?>
                                                </td>
                                                <td>
                                                     <a href="search_block.php?id=<?php echo $row['id'];  ?>"> Block</a>
                                                </td>
                                            </tr>



                                        <?php                            
                                                                    }
                                                        }

                                        ?>
                                </table>
                                
</div>
</body>
</html>