<?php 
    require_once('db.php');


    function insertProduct($products){
        $conn = getConnection();
        $profit=$products['sellprice']-$products['buyprice'];
        $sql = "insert into products_info values('', '{$products['name']}', '{$products['buyprice']}', '{$products['sellprice']}', '{$profit}' )";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            return true;
        }else{
            return false;
        }
    }

 
?>